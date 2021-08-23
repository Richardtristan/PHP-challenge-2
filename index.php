<?php
require 'vendor/autoload.php';

include 'class/Router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'src/php/home');
$router->get('test', 'src/php/test');
