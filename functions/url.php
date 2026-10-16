<?php

function url(string $path = ''): string
{
    return '/' . ltrim($path, '/');
}