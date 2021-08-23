<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        case '/home' :
        require __DIR__ . '/assets/php/home.php';
        break;
    case '/test' :
        require __DIR__ . '/assets/php/test.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/assets/php/404.php';
        break;
}