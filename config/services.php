<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
         'client_id' => '1547987812015533',
         'client_secret' => '12085972d1ddbc103cae048c88f76a79',
         'redirect' => 'https://00224acf.ngrok.io/callback/facebook',
    ],
    'google' => [
        'client_id' => '1004837921502-qpchgj3u5jhi4n611ug9ckshipfdrrec.apps.googleusercontent.com',
        'client_secret' => 'xKeCvZvtVW4Z_hY-UEvcBVLR',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
    ], 
];
