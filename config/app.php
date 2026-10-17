<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Application
    |--------------------------------------------------------------------------
    */

    'name' => 'Maralex',
    'url' => 'https://maralex.xyz',
    'environment' => 'production',
    'debug' => false,

    /*
    |--------------------------------------------------------------------------
    | Language
    |--------------------------------------------------------------------------
    */

    'supported_languages' => ['de', 'en'],
    'default_language' => 'de',
    'language_directory' => __DIR__ . '/../lang',

    'social' => [
      'enabled' => true,
      'networks' => [
        'github' => 'https://maralexofficial.github.de',
        'steam' => '',
        'discord' => '',
      ]
    ]
];