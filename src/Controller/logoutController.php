<?php


use App\Helper\Logout;

$logout =new Logout();
$logout->logout();

header("location: /login");

