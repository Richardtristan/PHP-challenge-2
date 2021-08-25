<?php
require '../vendor/autoload.php';

use App\Helper\Router;
use App\Model\Connect;

$connection = new Connect('localhost', 'cogip', 'root', '');
$db = $connection->getPdo();

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'LoginController');
$router->get('login', 'LoginController');
$router->get('connect', '../View/php/login');
$router->get('home', 'LoginController');
$router->get('error_page 404', '404');
//$router->get('create', '../View/php/create');
$router->get('logout', 'LogoutController');


