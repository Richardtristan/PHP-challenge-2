<?php


use App\Model\Login;

session_start();


$isemptyUsername = empty($_POST['Login']);
$isemptyPassword = empty($_POST['Password']);
$issetVar = isset($_POST['Login']) && isset($_POST['Password']);
$filterUsername = isset($_POST['Login']) ? filter_var($_POST['Login'], FILTER_SANITIZE_STRING) : null;
$filterPassword = isset($_POST['Password']) ? filter_var($_POST['Password'], FILTER_SANITIZE_STRING) : null;
$grade = $_SESSION['grade'] = 1 ? 'Modo' : 'Admin';



if ($issetVar && !$isemptyUsername && $filterPassword && $filterUsername) {
    var_dump($_POST);
    $login = new Login($_POST['Password'], $_POST['Login']);
    if ($login->login()) {
        $_SESSION['idUser'] = $login->id();
        $_SESSION['username'] = $login->username($_SESSION['idUser']);
        $_SESSION['password'] = $login->password($_SESSION['idUser']);
        $_SESSION['email'] = $login->email($_SESSION['idUser']);
        $_SESSION['grade'] = $login->grade($_SESSION['idUser']);
        header("location: /connected");
    } else {
        echo '<p>password or username is not valid</p>';
    }
}

if (!isset($_SESSION['idUser'])) {
   header("location: /connect");
}





