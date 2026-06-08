<?php

namespace VanDmade\Syncra\DTOs;

/**
 * Wraps the parsed response from a Gemini request.
 *
 * When you ask for a structured response, Gemini returns JSON matching the
 * schema you sent. That parsed array lands in $data. The raw text (if any)
 * lands in $text. Check $structured to know which path to use.
 */
class GeminiResponse
{

    public function __construct(
        public readonly bool $structured,
        public readonly ?array $data,
        public readonly ?string $text,
        public readonly string $model,
        public readonly int $requestId,
    ) {}

    public static function fromStructured(
        array $data,
        string $model,
        int $requestId
    ): self {
        return new self(
            structured: true,
            data: $data,
            text: null,
            model: $model,
            request_id: $requestId,
        );
    }

    public static function fromText(
        string $text,
        string $model,
        int $requestId
    ): self {
        return new self(
            structured: false,
            data: null,
            text: $text,
            model: $model,
            request_id: $requestId,
        );
    }

}
