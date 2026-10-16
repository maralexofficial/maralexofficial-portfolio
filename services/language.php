<?php

$supportedLanguages = $config['supported_languages'];
$defaultLanguage = $config['default_language'];

$requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

if (preg_match('#^/lang/([a-z]{2})/?$#', $requestUri, $matches)) {
    $requestedLanguage = $matches[1];

    if (in_array($requestedLanguage, $supportedLanguages, true)) {
        setcookie('language', $requestedLanguage, [
            'expires' => time() + 60 * 60 * 24 * 365,
            'path' => '/',
            'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
    }

    $referer = $_SERVER['HTTP_REFERER'] ?? '';
    $refererPath = parse_url($referer, PHP_URL_PATH);

    $redirect = '/';

    if ($referer !== '') {
        $host = $_SERVER['HTTP_HOST'] ?? '';
        $refererHost = parse_url($referer, PHP_URL_HOST);

        if ($refererHost !== null && strcasecmp($refererHost, $host) === 0) {
            $redirect = $refererPath ?: '/';
            $query = parse_url($referer, PHP_URL_QUERY);

            if ($query !== null) {
                $redirect .= '?' . $query;
            }

            $fragment = parse_url($referer, PHP_URL_FRAGMENT);

            if ($fragment !== null) {
                $redirect .= '#' . $fragment;
            }
        }
    }

    if (in_array($requestedLanguage, $supportedLanguages, true)) {
        $separator = str_contains($redirect, '?') ? '&' : '?';

        $redirect .= $separator . 'language_changed='
            . rawurlencode($requestedLanguage);
    }

    header('Location: ' . $redirect, true, 302);
    exit;
}

$cookieLanguage = $_COOKIE['language'] ?? '';

$language = in_array($cookieLanguage, $supportedLanguages, true)
    ? $cookieLanguage
    : $defaultLanguage;

$translationFile = $config['language_directory'] . '/' . $language . '.json';

if (!is_file($translationFile)) {
    throw new RuntimeException(
        'Translation file not found: ' . $translationFile
    );
}

$translations = json_decode(
    file_get_contents($translationFile),
    true,
    512,
    JSON_THROW_ON_ERROR
);