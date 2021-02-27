<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API KEY
    |--------------------------------------------------------------------------
    */
    'key' => env('GOOGLE_BOOKS_KEY'),

    /*
    |--------------------------------------------------------------------------
    | 2 letter ISO 639 country code
    |--------------------------------------------------------------------------
    */
    'country' => env('GOOGLE_BOOKS_COUNTRY_CODE'),
    'maxResults' => 10,

];
