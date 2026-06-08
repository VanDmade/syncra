<?php

namespace VanDmade\Syncra\Gemini;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use VanDmade\Syncra\DTOs\GeminiResponse;
use VanDmade\Syncra\Gemini\Models\Request;
use Exception;
use Throwable;

class Gemini
{

    protected Client $client;
    protected string $model;
    protected ?string $imageModel = null;
    protected string $defaultMimeType = 'application/octet-stream';

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('syncra.gemini.base_url'),
            'timeout' => 30,
        ]);
        $this->model = config('syncra.gemini.model');
        $this->imageModel = config('syncra.gemini.image_model');
    }

    public function send(
        string $prompt,
        string|array|null $images = null,
        ?array $responseSchema = null
    ): GeminiResponse {
        $imageIds = $images === null ? [] :
            (is_array($images) ? array_values($images) : [$images]);
        $parts = [['text' => $prompt]];
        foreach ($imageIds as $imageId) {
            $image = $this->imageModel ? $this->imageModel::find($imageId) : null;
            if (!$image) {
                // The image model was not set within the config file
                continue;
            }
            $mimeType = Storage::disk($image->disk)->mimeType($image->path) ?: $this->defaultMimeType;
            $parts[] = [
                'inline_data' => [
                    'mime_type' => $mimeType,
                    'data' => base64_encode(Storage::disk($image->disk)->get($image->path)),
                ],
            ];
        }
        $payload = ['contents' => [['parts' => $parts]]];
        if ($responseSchema !== null) {
            $payload['generationConfig'] = [
                'responseMimeType' => 'application/json',
                'responseSchema' => $responseSchema,
            ];
        }
        $structured = $responseSchema !== null;
        $status = 'completed';
        $error = $finishReason = $promptTokens =
        $completionTokens = $totalTokens = $data = $text = null;
        $started = microtime(true);
        try {
            // Sends the information to Gemini for the response
            $raw = $this->client->post('/models/'.$this->model.':generateContent', [
                'query' => ['key' => config('syncra.gemini.api_key')],
                'json' => $payload,
            ]);
            $body = json_decode((string) $raw->getBody(), true);
            $candidate = $body['candidates'][0] ?? null;
            $rawText = $candidate['content']['parts'][0]['text'] ?? null;
            if ($structured && $rawText !== null) {
                $data = json_decode($rawText, true);
            } else {
                $text = $rawText;
            }
            $usage = $body['usageMetadata'] ?? [];
        } catch (Throwable $error) {
            $status = 'failed';
            $error = $error->getMessage();
        }
        $durationMs = (int) round((microtime(true) - $started) * 1000);
        // Tracks the request and response for development purposes
        $record = $this->track(
            prompt: $prompt,
            images: $images,
            responseSchema: $responseSchema,
            response: $result,
            finishReason: $candidate['finishReason'] ?? null,
            promptTokens: $usage['promptTokenCount'] ?? nulls,
            completionTokens: $usage['candidatesTokenCount'] ?? null,
            totalTokens: $usage['totalTokenCount'] ?? null,
            durationMs: $durationMs,
            status: $status,
            error: $error,
        );
        return new GeminiResponse(
            structured: $structured,
            data: $data,
            text: $text,
            model: $this->model,
            requestId: $record->id,
        );
    }

    public function lastRequest(?int $userId = null): ?Request
    {
        $userId ??= Auth::id();
        if ($userId === null) {
            return null;
        }
        return Request::where('user_id', $userId)->latest()->first();
    }

    private function track(
        string $prompt,
        string|array|null $images,
        ?array $responseSchema,
        GeminiResponse $response,
        ?string $finishReason,
        ?int $promptTokens,
        ?int $completionTokens,
        ?int $totalTokens,
        int $durationMs,
        string $status,
        ?string $error = null
    ): Request {
        $imageIds = $images === null ? null :
            (is_array($images) ? array_values($images) : [$images]);
        return Request::create([
            'image_ids' => $imageIds,
            'model' => $response->model,
            'prompt' => $prompt,
            'has_image' => $imageIds !== null,
            'response_schema' => $responseSchema,
            'structured' => $response->structured,
            'response_data' => $response->data,
            'response_text' => $response->text,
            'finish_reason' => $finishReason,
            'prompt_tokens' => $promptTokens,
            'completion_tokens' => $completionTokens,
            'total_tokens' => $totalTokens,
            'duration_ms' => $durationMs,
            'status' => $status,
            'error' => $error,
            'completed_at' => now(),
        ]);
    }

}
