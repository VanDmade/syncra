<?php

namespace VanDmade\Syncra\Google;

use Illuminate\Support\Facades\Http;

class Sheets
{

    const url = 'https://sheets.googleapis.com';

    public static function list($accessToken, $attributes = [])
    {
        $parameters = [
            'q=mimeType=\'application/vnd.google-apps.spreadsheet\'',
            'access_token='.$accessToken,
        ];
        // Allows for the ease of adding in parameters to search, order, or delimit the return
        foreach ($attributes as $key => $value) {
            $parameters[] = $key.'='.$value;
        }
        $response = Http::get('https://www.googleapis.com/drive/v3/files?'.implode('&', $parameters))->json();
        $files = [];
        foreach ($response['files'] ?? [] as $file) {
            $files[] = [
                'id' => $file['id'],
                'name' => $file['name'],
            ];
        }
        return [
            'next_page_token' => $response['nextPageToken'] ?? null,
            'page_size' => $attributes['pageSize'] ?? null,
            'files' => $files,
        ];
    }

    public static function get($id, $accessToken, $range = null)
    {
        $url = 'https://sheets.googleapis.com/v4/spreadsheets/'.$id.(!is_null($range) ? '/values/'.$range : '');
        $response = Http::get($url.'?access_token='.$accessToken)->json();
        return $response;
    }

    public static function sheet($id, $accessToken)
    {

    }

}