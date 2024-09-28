<?php

namespace VanDmade\Syncra\Google\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VanDmade\Syncra\Google\OAuth;
use Auth;

class Authentication extends Model
{

    use HasFactory;

    protected $table = 'syncra_google_authentications';

    protected $fillable = [
        'user_id',
        'state',
        'scopes',
        'access_token',
        'refresh_token',
        'expires_at',
    ];

    protected $hidden = [
        'user_id',
        'state',
        'access_token',
        'refresh_token',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'user_id');
    }

    public function exchange($state, $scopes, $code, $save = false)
    {
        // Validates that the state matches the current state
        if ($state != $this->state) {
            throw new Exception(__('syncra/google.errors.state_does_not_match'), 500);
        }
        // Turns the list of scopes into a string with the scopes separated by commas
        if (is_array($scopes)) {
            $scopes = implode(' ', $scopes);
        }
        // Validates that the scopes match the initial request to prevent any malicious behavior
        if ($scopes != implode(' ', $this->scopes)) {
            throw new Exception(__('syncra/google.errors.scopes_do_not_match'), 404);
        }
        if (strtotime($this->created_at) < strtotime('-'.config('syncra.code_timeout', 900).' seconds')) {
            throw new Exception(__('syncra/google.errors.request_expired'), 500);
        }
        // Uses the code and exchanges it for an access token
        $response = OAuth::exchange($code);
        if (!isset($response['access_token'])) {
            throw new Exception(__('syncra/google.errors.access_token_missing'), 404);
        }
        $this->access_token = $response['access_token'];
        $this->refresh_token = $response['refresh_token'];
        $this->expires_at = date('Y-m-d H:i:s', strtotime('+'.$response['expires_in'].' seconds'));
        if ($save) {
            $this->save();
        }
    }

    public function refresh($save = false)
    {
        // Determines if the code has expired already OR 
        if (strtotime($this->expires_at) >= time()) {
            // No need to refresh this token
            return;
        }
        // Refreshes the token
        $response = OAuth::refresh($this->refresh_token);
        if (!isset($response['access_token'])) {
            throw new Exception(__('syncra/google.errors.access_token_missing'), 404);
        }
        // Updates the authentication entry with the new tokens
        $this->access_token = $response['access_token'];
        $this->expires_at = date('Y-m-d H:i:s', strtotime('+'.$response['expires_in'].' seconds'));
        if ($save) {
            $this->save();
        }
    }

    public static function generateState()
    {
        return substr(md5(config('syncra.salt').md5(time().'this-is-syncra')), 5, 16);
    }

    public function getScopesAttribute($scopes)
    {
        return json_decode($scopes, true) ?? [];
    }

}
