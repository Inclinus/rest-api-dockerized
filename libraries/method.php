<?php

function isGetMethod(): bool
{
    return $_SERVER["REQUEST_METHOD"] === "GET";
}

function isPostMethod(): bool
{
    return $_SERVER["REQUEST_METHOD"] === "POST";
}

function isPatchMethod(): bool
{
    return $_SERVER["REQUEST_METHOD"] === "PATCH";
}

function isDeleteMethod(): bool
{
    return $_SERVER["REQUEST_METHOD"] === "DELETE";
}
