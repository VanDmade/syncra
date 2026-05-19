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
    // Total time between requesting access adn then exchanging for an access token
    'code_timeout' => '900',
    // Unique value used when generating unique IDs
    'salt' => 'syncra-20240924',
    // Set to false to disable SSL certificate verification (useful for local development)
    'ssl_verify' => env('SYNCRA_SSL_VERIFY', true),
];