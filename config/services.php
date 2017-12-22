<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'github' => [
        'client_id' => env('GITHUB_ID'),
        'client_secret' => env('GITHUB_SECRET'),
        'redirect' => env('GITHUB_URL'),
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect' => env('FACEBOOK_URL'),
    ],

    'twitter' => [
        'client_id' => env('TWITTER_ID'),
        'client_secret' => env('TWITTER_SECRET'),
        'redirect' => env('TWITTER_URL'),
    ],

    'google' => [
        'client_id' => env('GOOGLE_ID'),
        'client_secret' => env('GOOGLE_SECRET'),
        'redirect' => env('GOOGLE_URL'),
    ],

    'line' => [
        'client_id' => env('LINE_ID'),
        'client_secret' => env('LINE_SECRET'),
        'redirect' => env('LINE_URL'),
    ],

    'weibo' => [
        'client_id' => env('WEIBO_ID'),
        'client_secret' => env('WEIBO_SECRET'),
        'redirect' => env('WEIBO_URL'),
    ],
    
    'instagram' => [
        'client_id' => env('INSTAGRAM_ID'),
        'client_secret' => env('INSTAGRAM_SECRET'),
        'redirect' => env('INSTAGRAM_URL'),
    ],

    'kakao' => [
        'client_id' => env('TALK_ID'),
        'client_secret' => env('TALK_SECRET'),
        'redirect' => env('TALK_URL'),
    ],

    'webchat' => [
        'client_id' => env('WEBCHAT_ID'),
        'client_secret' => env('WEBCHAT_SECRET'),
        'redirect' => env('WEBCHAT_URL'),
    ],
];
