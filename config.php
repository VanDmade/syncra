<?php

return [
    'google' => [
        // URL endpoint for the OAuth from Google
        'url' => 'https://accounts.google.com/o/oauth2/v2/auth',
        // Route where the callback comes to
        'redirect_uri' => 'http://localhost:8000/google/validate',
        // List of all scopes that are allowed to be used within this application. Set this to NULL to allow all scopes
        'allowed_scopes' => null,
    ],
    // Total time between requesting access adn then exchanging for an access token
    'code_timeout' => '900',
    // Unique value used when generating unique IDs
    'salt' => 'syncra-20240924',
];