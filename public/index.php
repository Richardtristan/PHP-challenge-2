<?php
require '../vendor/autoload.php';

use App\Helper\Router;


$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'home');
$router->get('default', 'default');
$router->get('home', 'home');


