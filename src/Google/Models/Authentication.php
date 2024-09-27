<?php

namespace VanDmade\Syncra\Google\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public static function generateState()
    {
        return substr(md5(config('syncra.salt').md5(time().'this-is-syncra')), 5, 16);
    }

}
