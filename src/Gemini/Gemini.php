<?php

namespace VanDmade\Syncra\Gemini;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use VanDmade\Syncra\Gemini\DTOs\Response;
use VanDmade\Syncra\Gemini\Models\Request;
use Exception;
use Throwable;

class Gemini
{

    /** Maximum number of images allowed in a single request, to bound token cost. */
    const MAX_IMAGES = 10;

    protected Client $client;
    protected string $model;
    protected ?string $imageModel = null;
    protected string $defaultMimeType = 'application/octet-stream';

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => rtrim(config('syncra.gemini.url'), '/').'/',
            'timeout' => 30,
            'verify' => config('syncra.ssl_verify'),
        ]);
        $this->model = config('syncra.gemini.model');
        $this->imageModel = config('syncra.images.model');
    }

    public function send(
        string $prompt,
        string|array|null $images = null,
        ?array $responseSchema = null,
        bool $returnRequest = false
    ): Response|Request {
        $imageIds = $images === null ? [] :
            (is_array($images) ? array_values($images) : [$images]);
        if (count($imageIds) > self::MAX_IMAGES) {
            throw new Exception('At most '.self::MAX_IMAGES.' images are allowed per request.', 422);
        }
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
        $maxAttempts = 3;
        for ($attempt = 1; $attempt <= $maxAttempts; $attempt++) {
            try {
                // Sends the information to Gemini for the response
                $raw = $this->client->post('models/'.$this->model.':generateContent', [
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
                break;
            } catch (Throwable $exception) {
                if ($attempt < $maxAttempts && $this->isTransientError($exception)) {
                    // 503 (overloaded) or 429 (rate-limited) — back off and retry
                    sleep(2 ** ($attempt - 1));
                    continue;
                }
                $status = 'failed';
                $error = $this->minimizeError($exception);
                break;
            }
        }
        $durationMs = (int) round((microtime(true) - $started) * 1000);
        // Tracks the request and response for development purposes
        $record = $this->track(
            prompt: $prompt,
            images: $images,
            responseSchema: $responseSchema,
            structured: $structured,
            data: $data,
            text: $text,
            finishReason: $candidate['finishReason'] ?? null,
            promptTokens: $usage['promptTokenCount'] ?? null,
            completionTokens: $usage['candidatesTokenCount'] ?? null,
            totalTokens: $usage['totalTokenCount'] ?? null,
            durationMs: $durationMs,
            status: $status,
            error: $error,
        );
        if ($returnRequest) {
            return $record;
        }
        return new Response(
            structured: $structured,
            data: $data,
            text: $text,
            model: $this->model,
            status: $status,
            error: $error,
            requestId: $record->id,
        );
    }

    private function isTransientError(Throwable $exception): bool
    {
        if ($exception instanceof RequestException && $exception->hasResponse()) {
            return in_array($exception->getResponse()->getStatusCode(), [429, 503]);
        }
        return false;
    }

    private function minimizeError(Throwable $exception): string
    {
        if ($exception instanceof RequestException && $exception->hasResponse()) {
            $body = (string) $exception->getResponse()->getBody();
            $decoded = json_decode($body, true);
            if ($decoded !== null) {
                return json_encode($decoded);
            }
            return trim(preg_replace('/\s+/', ' ', $body));
        }
        return trim(preg_replace('/\s+/', ' ', $exception->getMessage()));
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
        bool $structured,
        ?array $data,
        ?string $text,
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
            'model' => $this->model,
            'prompt' => $prompt,
            'has_image' => $imageIds !== null,
            'response_schema' => $responseSchema,
            'structured' => $structured,
            'response_data' => $data,
            'response_text' => $text,
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
