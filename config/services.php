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
        'client_id' => '613308916750476',
        'client_secret' => 'a183a47ae0bd1c5ad3a48e647d7cc2ef',
        'redirect' => env('APP_URL').'/callback',
    ],
    'google' => [
        'client_id' => '415811579142-vc6s7mp0rlds5r696t6bfuth2opc1jkv.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => env('APP_URL').'/auth/google/callback',
    ],

];
