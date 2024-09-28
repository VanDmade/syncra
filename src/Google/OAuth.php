<?php

namespace VanDmade\Syncra\Google;

use Illuminate\Support\Facades\Http;
use Exception;

class OAuth
{

    /**************************************************************************\
     * Creates the URL for the whatever scopes the developer needs from the user
     * 
     * @param array|string $scopes List of scope urls that are being requested 
     * @param string $state Unique ID use to authenticate the request on return
     * 
     * @return strubg The url that will be used to link the google account
    \**************************************************************************/
    public static function url($scopes, $state)
    {
        // Makes 100% sure that the client ID and Secret are present
        if (is_null(env('SYNCRA_GOOGLE_CLIENT_ID')) || is_null('SYNCRA_GOOGLE_CLIENT_SECRET')) {
            throw new Exception(__('syncra/google.errors.not_setup'), 500);
        }
        // Turns the list of scopes into a string with the scopes separated by commas
        if (is_array($scopes)) {
            $scopes = implode(' ', $scopes);
        }
        $parameters = [
            'scope='.$scopes,
            'access_type=offline',
            'response_type=code',
            'state='.$state,
            'redirect_uri='.config('syncra.google.redirect_uri'),
            'client_id='.env('SYNCRA_GOOGLE_CLIENT_ID'),
        ];
        return config('syncra.google.url').'?'.implode('&', $parameters);
    }

    /**************************************************************************\
     * Exchanges the callback code for an actual access and refresh token
     * 
     * @param string $code Authentication code from the Oauth response
     * 
     * @return array The response from the Google server with the access and
     *    refresh token as well as when this code will expire
    \**************************************************************************/
    public static function exchange($code)
    {
        return Http::post(config('syncra.google.exchange_uri'), [
            'code' => $code,
            'client_id' => env('SYNCRA_GOOGLE_CLIENT_ID'),
            'client_secret' => env('SYNCRA_GOOGLE_CLIENT_SECRET'),
            'redirect_uri' => config('syncra.google.redirect_uri'),
            'grant_type' => 'authorization_code', 
        ])->json();
    }

    /**************************************************************************\
     * Refreshes the access token using the refresh token if it expired.
     * 
     * @param string $token Refresh token that you want to refresh
     * 
     * @return array The response from the Google server with the new access
     *    token and expiration time
    \**************************************************************************/
    public static function refresh($token)
    {
        return Http::post(config('syncra.google.exchange_uri'), [
            'refresh_token' => $token,
            'grant_type' => 'refresh_token',
            'client_id' => env('SYNCRA_GOOGLE_CLIENT_ID'),
            'client_secret' => env('SYNCRA_GOOGLE_CLIENT_SECRET'),
        ])->json();
    }

}