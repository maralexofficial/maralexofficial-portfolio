<?php

function l10n(string $path, mixed $default = null): mixed
{
    global $translations;

    $value = $translations;

    foreach (explode('.', $path) as $key) {
        if (!is_array($value) || !array_key_exists($key, $value)) {
            return $default ?? "Key not found ({$path})";
        }

        $value = $value[$key];
    }

    return $value ?? $default ?? "Key not found ({$path})";
}