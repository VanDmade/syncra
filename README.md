# Syncra

A Laravel package providing ready-to-use integrations with third-party APIs commonly needed in SaaS applications. Currently supports Google OAuth and Google Sheets.

## Features

- **Google OAuth** — Generate authorization URLs, exchange codes for tokens, and refresh access tokens
- **Google Sheets** — List spreadsheets from Google Drive and read sheet data with optional range and pagination support
- **Scope Management** — Declare and validate OAuth scopes in a centralized location
- **Token Storage** — Persists authentication tokens to the database via the `Authentication` model

## Requirements

- PHP 8.2+
- Laravel 10 or 11
- Guzzle HTTP 7.0.1+

## Installation

Add the package to your `composer.json` repositories:

```json
"repositories": [
    {
        "type": "path",
        "url": "packages/vandmade/syncra/syncra"
    }
]
```

Then require it:

```bash
composer require vandmade/syncra
```

Publish and run the migrations:

```bash
php artisan vendor:publish --provider="Vandmade\Syncra\SyncraServiceProvider"
php artisan migrate
```

## Configuration

Publish the config file and add your credentials to `.env`:

```env
SYNCRA_GOOGLE_CLIENT_ID=your-client-id
SYNCRA_GOOGLE_CLIENT_SECRET=your-client-secret
SYNCRA_GOOGLE_REDIRECT_URI=https://your-app.com/auth/google/callback
SYNCRA_GOOGLE_VERIFY_SSL=true
```

### Config Reference (`config/syncra.php`)

```php
return [
    'google' => [
        'client_id'     => env('SYNCRA_GOOGLE_CLIENT_ID'),
        'client_secret' => env('SYNCRA_GOOGLE_CLIENT_SECRET'),
        'redirect_uri'  => env('SYNCRA_GOOGLE_REDIRECT_URI'),
        'verify_ssl'    => env('SYNCRA_GOOGLE_VERIFY_SSL', true),
        'scopes'        => [
            // List the scopes your application requires
        ],
    ],
];
```

## Usage

### Google OAuth

**Step 1 — Redirect the user to Google:**

```php
use Vandmade\Syncra\Google\OAuth;

$url = (new OAuth)->authorizationUrl();

return redirect($url);
```

**Step 2 — Handle the callback and exchange the code for tokens:**

```php
use Vandmade\Syncra\Google\OAuth;

$tokens = (new OAuth)->exchangeCode($request->get('code'));

// $tokens contains access_token, refresh_token, expires_in, etc.
```

**Refresh an access token:**

```php
use Vandmade\Syncra\Google\OAuth;

$tokens = (new OAuth)->refreshToken($storedRefreshToken);
```

### Google Sheets

List all spreadsheets accessible to the authenticated user:

```php
use Vandmade\Syncra\Google\Sheets;

$spreadsheets = (new Sheets($accessToken))->list();
```

Read data from a specific sheet:

```php
use Vandmade\Syncra\Google\Sheets;

$sheets = new Sheets($accessToken);

// Read entire sheet
$data = $sheets->get($spreadsheetId);

// Read a specific range
$data = $sheets->get($spreadsheetId, 'Sheet1!A1:D10');
```

### Scopes

Retrieve defined OAuth scopes:

```php
use Vandmade\Syncra\Google\Scopes;

$scopes = Scopes::all();       // All configured scopes
$scopes = Scopes::required();  // Required scopes only
```

## Database

The `authentications` table stores OAuth credentials per user and provider:

| Column | Description |
|---|---|
| `user_id` | The local user this token belongs to |
| `provider` | The OAuth provider (e.g. `google`) |
| `access_token` | The current access token |
| `refresh_token` | The refresh token for obtaining new access tokens |
| `expires_at` | When the current access token expires |
| `scopes` | JSON array of granted scopes |

```php
use Vandmade\Syncra\Google\Models\Authentication;

$auth = Authentication::where('user_id', $user->id)
    ->where('provider', 'google')
    ->first();
```
