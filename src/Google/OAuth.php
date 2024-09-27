<?php

namespace VanDmade\Syncra\Google;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Auth;
use Exception;

class OAuth
{

    /**************************************************************************\
     * Executes the entire library of Tablelify.
     * 
     * NOTE: All static methods within this class can be used separately in
     *    order to append logic or replace Tablelify functionality as needed.
     * 
     * @param array|string $scopes List of scope urls that are being requested 
     * 
     * @return array The default response of the Tablelify class 
    \**************************************************************************/
    public static function url($scopes)
    {
        // Makes 100% sure that the client ID and Secret are present
        if (is_null(env('SYNCRA_GOOGLE_CLIENT_ID')) || is_null('SYNCRA_GOOGLE_CLIENT_SECRET')) {
            throw new Exception('Your developer needs to fully setup Syncra\'s Google Library.', 500);
        }
        // Turns the list of scopes into a string with the scopes separated by commas
        if (is_array($scopes)) {
            $scopes = implode(' ', $scopes);
        }
        // Generates the state for the request
        $state = Models\Authentication::generateState();
        $parameters = [
            'scope='.$scopes,
            'access_type=offline',
            'response_type=code',
            'state='.$state,
            'redirect_uri='.config('syncra.google.redirect_uri'),
            'client_id='.env('SYNCRA_GOOGLE_CLIENT_ID'),
        ];
        $url = config('syncra.google.url').'?'.implode('&', $parameters);
        // Store the State and Scope
        Models\Authentication::create([
            'state' => $state,
            'scopes' => json_encode(explode(' ', $scopes)),
        ]);
        return $url;
    }

    /**************************************************************************\
     * Exchanges the callback code for an actual access and refresh token
     * 
     * @param object $request Laravel Request
     * 
     * @return boolean 
    \**************************************************************************/
    public static function exchange(Request $request)
    {
        try {
            $authentication = Models\Authentication::where('state', '=', $request->input('state'))
                ->where('created_at', '>=', date('Y-m-d H:i:s', strtotime('-15 minutes')))
                ->first();
            // Validates that the state and the scopes match the initial request to prevent any malicious behavior
            if (!isset($authentication->id) ||
                $request->input('scope') != implode(' ', json_decode($authentication->scopes, true))) {
                throw new Exception('The request was not found.', 404);
            }
            // Checks the code to make sure it's defined
            if (is_null($code = $request->input('code') ?? null)) {
                throw new Exception('The code was not found.', 404);
            }
            $response = Http::post('https://oauth2.googleapis.com/token', [
                'code' => $code,
                'client_id' => env('SYNCRA_GOOGLE_CLIENT_ID'),
                'client_secret' => env('SYNCRA_GOOGLE_CLIENT_SECRET'),
                'redirect_uri' => config('syncra.google.redirect_uri'),
                'grant_type' => 'authorization_code', 
            ])->json();
            // Updates the authentication entry with the new tokens
            $authentication->access_token = $response['access_token'];
            $authentication->refresh_token = $response['refresh_token'];
            $authentication->expires_at = date('Y-m-d H:i:s', strtotime('+'.$response['expires_in'].' seconds'));
            $authentication->save();
            return true;
        } catch (Exception $error) {
            // TODO :: Log Error
            return false;
        }
    }

    /**************************************************************************\
     * Executes the entire library of Tablelify.
     * 
     * @return array The default response of the Tablelify class 
    \**************************************************************************/
    public function refresh()
    {
        try {

        } catch (Exception $error) {
            return $error;
        }
    }

}