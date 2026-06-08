<?php

namespace VanDmade\Syncra\Gemini\DTOs;

/**
 * Wraps the parsed response from a Gemini request.
 *
 * When you ask for a structured response, Gemini returns JSON matching the
 * schema you sent. That parsed array lands in $data. The raw text (if any)
 * lands in $text. Check $structured to know which path to use.
 */
class Response
{

    public function __construct(
        public readonly bool $structured,
        public readonly ?array $data,
        public readonly ?string $text,
        public readonly string $model,
        public readonly string $status = 'pending',
        public readonly ?string $error = null,
        public readonly ?int $requestId = null
    ) {}

    public static function fromStructured(
        array $data,
        string $model,
        string $status = 'pending',
        ?string $error = null,
        ?int $requestId = null
    ): self {
        return new self(
            structured: true,
            data: $data,
            text: null,
            model: $model,
            status: $status,
            error: $error,
            requestId: $requestId,
        );
    }

    public static function fromText(
        string $text,
        string $model,
        string $status = 'pending',
        ?string $error = null,
        ?int $requestId = null
    ): self {
        return new self(
            structured: false,
            data: null,
            text: $text,
            model: $model,
            status: $status,
            error: $error,
            requestId: $requestId,
        );
    }

}
