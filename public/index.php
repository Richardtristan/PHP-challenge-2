<?php
require '../vendor/autoload.php';
require_once("router.php");
use App\Model\Connect;
use App\Model\WelcomeList;

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
get('/connect', "../src/View/login.php");
post('/connect','../src/Controller/LoginController.php');
get('/welcome', "../src/Controller/welcomeListController.php");
get('/home', "../src/View/home.php");
get('/companies_list', "../src/Controller/CompaniesListController.php");
get('/companies_lists', "../src/View/Lists/companies_list.php");

get('/connected', "../src/Controller/LoginController.php");
get('/logout', "../src/Controller/LogoutController.php");
get('/create', "../src/View/create.php");
post('/create', "../src/View/create.php");
post('/connected', "../src/View/LoginController.php");









// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','../src/View/404.php');
