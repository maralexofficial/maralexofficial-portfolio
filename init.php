<?php

$supportedLanguages = ['de', 'en'];
$defaultLanguage = 'de';
$languageDirectory = __DIR__ . '/lang';

// Change language
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

if (preg_match('#^/lang/(de|en)/?$#', $requestPath, $matches)) {
    $selectedLanguage = $matches[1];

    setcookie('language', $selectedLanguage, [
        'expires' => time() + 31536000,
        'path' => '/',
        'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        'httponly' => true,
        'samesite' => 'Lax',
    ]);

    $redirect = '/';
    $referer = $_SERVER['HTTP_REFERER'] ?? '';
    $currentHost = $_SERVER['HTTP_HOST'] ?? '';

    $refererHost = parse_url($referer, PHP_URL_HOST);
    $refererPath = parse_url($referer, PHP_URL_PATH) ?: '/';

    if (
        $referer !== ''
        && $refererHost !== null
        && $currentHost !== ''
        && strcasecmp($refererHost, $currentHost) === 0
        && !preg_match('#^/lang/(de|en)/?$#', $refererPath)
    ) {
        $redirect = $refererPath;

        $query = parse_url($referer, PHP_URL_QUERY);

        if ($query !== null && $query !== false) {
            $redirect .= '?' . $query;
        }
    }

    header('Location: ' . $redirect, true, 302);
    exit;
}

// Load language
$cookieLanguage = $_COOKIE['language'] ?? $defaultLanguage;

$language = in_array($cookieLanguage, $supportedLanguages, true)
    ? $cookieLanguage
    : $defaultLanguage;

$languagePath = $languageDirectory . '/' . $language . '.json';

if (!is_file($languagePath)) {
    http_response_code(500);
    exit('Language file not found: ' . $languagePath);
}

try {
    $translations = json_decode(
        file_get_contents($languagePath),
        true,
        512,
        JSON_THROW_ON_ERROR
    );
} catch (JsonException $e) {
    http_response_code(500);
    exit('Invalid language file.');
}

if (!is_array($translations)) {
    http_response_code(500);
    exit('Invalid language file.');
}

// Translation helper
function l10n(string $path, mixed $default = 'n/a'): mixed
{
    global $translations;

    $value = $translations;

    foreach (explode('.', $path) as $key) {
        if (!is_array($value) || !array_key_exists($key, $value)) {
            return $default;
        }

        $value = $value[$key];
    }

    return $value ?? $default;
}
