<?php

function l10n(
    string $path,
    mixed $default = null,
    array $replace = []
): mixed {
    global $translations;

    $value = $translations;

    foreach (explode('.', $path) as $key) {
        if (!is_array($value) || !array_key_exists($key, $value)) {
            return $default ?? "Key not found ({$path})";
        }

        $value = $value[$key];
    }

    if ($value === null) {
        return $default ?? "Key not found ({$path})";
    }

    if (!is_string($value) || $replace === []) {
        return $value;
    }

    foreach ($replace as $key => $replacement) {
        $value = str_replace(
            '{' . $key . '}',
            (string) $replacement,
            $value
        );
    }

    return $value;
}