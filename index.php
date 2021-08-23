<?php

$url = '';

if (isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}
if ($url == ''){
    require 'assets/php/home.php';
}elseif ($url[0] == test AND !empty($url[1])){
    require 'assets/php/test.php';
}else{
    require 'assets/php/404.php';
}