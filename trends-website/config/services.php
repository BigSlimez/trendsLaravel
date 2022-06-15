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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key' => env('pk_test_51L1ZsADDlfu1MLpXbX1e2YJvpAbtXhhsbJasVKSaXpQahNcuaUbQecOv1rp4coG7xVFP2M2iQxiRP6BJFDq9cAyl00eM85hBa8'),
        'secret' => env('sk_test_51L1ZsADDlfu1MLpX05zuY59cSCQA7Yqi756sf9q01l3enWd9AVxwmc5U6qGJFfRBSg6F9yaDgMS0789sBKs68ms70009m4s0dY'),
    ],

];
