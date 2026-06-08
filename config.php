<?php

return [
    'google' => [
        'client_id' => env('SYNCRA_GOOGLE_CLIENT_ID'),
        'client_secret' => env('SYNCRA_GOOGLE_CLIENT_SECRET'),
        // URL endpoint for the OAuth from Google
        'url' => 'https://accounts.google.com/o/oauth2/v2/auth',
        // Route where the callback comes to
        'redirect_uri' => env('SYNCRA_GOOGLE_REDIRECT_URI', env('APP_URL').'/google/validate'),
        // Route where the token is exchanged or grabbed via the auth code
        'exchange_uri' => 'https://oauth2.googleapis.com/token',
        // List of all scopes that are allowed to be used within this application. Set this to NULL to allow all scopes
        'allowed_scopes' => null,
    ],
    'images' => [
        // The model used to look up images by ID for the `images()` accessor on
        // Gemini requests. Defaults to Cuztomisable's Image model when installed.
        'model' => class_exists(\VanDmade\Cuztomisable\Models\Image::class)
            ? \VanDmade\Cuztomisable\Models\Image::class
            : null,
    ],
    'gemini' => [
        'api_key' => env('SYNCRA_GEMINI_API_KEY', null),
        'model' => env('SYNCRA_GEMINI_MODEL', 'gemini-2.0-flash'),
        // Base URL for Gemini API calls (no trailing slash). The package will append the right path for each request.
        'url' => env('SYNCRA_GEMINI_URL', 'https://generativelanguage.googleapis.com/v1beta'),
        // Record responses in the database
        'record_responses' => true,
        // Record prompts in the database
        'record_prompts' => true,
        // Deletes the entries after how many days. Set to null to never delete.
        'delete_after_days' => 30,
        // Deletes just the text within the prompts and responses, but keeps the metadata for analytics.
        'delete_only_prompts_and_responses' => true,
    ],
    // Total time between requesting access and then exchanging for an access token
    'code_timeout' => '900',
    // Unique value used when generating unique IDs
    'salt' => 'syncra-20240924',
    // Set to false to disable SSL certificate verification (useful for local development)
    'ssl_verify' => env('SYNCRA_SSL_VERIFY', true),
];