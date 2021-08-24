<?php
require '../vendor/autoload.php';

use App\Helper\Router;
use App\Model\Connect;

$connection = new Connect('localhost', 'cogip', 'root', '');
$db = $connection->getPdo();

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'home');
$router->get('default', 'default');
$router->get('home', 'home');
$router->get('error_page 404', '404');
$router->get('create', 'create');
$router->get('logout', 'logout');


