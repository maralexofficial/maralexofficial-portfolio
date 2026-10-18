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
    'admin_mail' => 'alexander.bergmann@maralex.xyz',

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
        'github' => [
          'icon' => 'si si-github',
          'url' => '#',
          'title' => 'Github',
        ],
        'steam' => [
          'icon' => 'si si-steam',
          'url' => '#',
          'title' => 'Steam',
        ],
        'discord' => [
          'icon' => 'si si-discord',
          'url' => '#',
          'title' => 'Discord',
        ],
      ]
    ]
];