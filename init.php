<?php

$configPath = __DIR__ . '/config.json';

if (!is_file($configPath)) {
    http_response_code(500);
    exit('Configuration file not found.');
}

$config = json_decode(file_get_contents($configPath), true);

if (!is_array($config)) {
    http_response_code(500);
    exit('Invalid configuration file.');
}

function config(string $path, mixed $default = null): mixed
{
    global $config;

    $value = $config;

    foreach (explode('.', $path) as $key) {
        if (!is_array($value) || !array_key_exists($key, $value)) {
            return $default;
        }

        $value = $value[$key];
    }

    return $value;
}