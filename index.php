<?php

require_once("router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index

get('/', "src/Controller/LoginController.php.php");
get('/login', "src/Controller/LoginController.php");
get('/connect', "src/View/php/login.php");
get('/connected', "src/View/php/home.php");
get('/home', "src/Controller/LoginController.php");
get('/logout', "src/Controller/LogoutController.php");
post('/connect','src/Controller/LoginController.php');



// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','src/View/php/404.php');
