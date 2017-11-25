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

    'facebook' => [
        'client_id' => '126120477946908',
        'client_secret' => '007b24704b98233486cc7b95c5f0eec6',
        'redirect' => 'http://localhost:2124/auth/facebook/callback',
    ],
    'twitter' => [
        'client_id' => 'Yy8YbU6tgCbR9TvLskKGEEHKY',
        'client_secret' => 'YEacxGFFE823DMcw1FSCkdDQ6LOxQQ0klfBkwLEE6kpBUl9j75',
        'redirect' => 'http://localhost:2124/auth/twitter/callback',
    ],
    'google' => [
        'client_id' => '354155190329-ob6ala0c40banbv4nu8ek5qvuh56opna.apps.googleusercontent.com',
        'client_secret' => '7PFi8hO3VvLqU_xjbwe2jAVZ',
        'redirect' => 'http://localhost:2124/auth/google/callback',
    ],
    'github' => [
        'client_id' => '5c709c7f72eb381511ab',
        'client_secret' => '255a00becbc485fa577658a299a9b3af24c00f30',
        'redirect' => 'http://localhost:2124/auth/github/callback',
    ],
];
