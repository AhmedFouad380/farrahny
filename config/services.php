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
        'client_id' => '5862281883869801',
        'client_secret' => 'cbfe6c1622852d28c7438b4ed467374d',
        'redirect' => 'https://farrahny.net/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '620641455756-plae4bi6aomvc77mg4mp9qn11v76d1bq.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://farrahny.net/auth/google/callback',
        ],

];
