<?php
require 'vendor/autoload.php';
require_once("router.php");
use App\Model\Connect;
$connection = new Connect('127.0.0.1', 'cogip', 'root', '');
$db = $connection->getPdo();

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index

get('/', "../src/Controller/LoginController.php");
get('/login', "../src/Controller/LoginController.php");
get('/connect', "../src/View/php/login.php");
post('/connect','../src/Controller/LoginController.php');
get('/welcome', "../src/View/php/welcome.php");

get('/connected', "../src/Controller/LoginController.php");
get('/logout', "../src/Controller/LogoutController.php");
get('/create', "../src/View/php/create.php");
post('/create', "../src/View/php/create.php");
post('/connected', "../src/View/php/LoginController.php");









// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','src/View/php/404.php');
