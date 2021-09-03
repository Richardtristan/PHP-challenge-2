<?php
if (isset($_SESSION['username'])) {
    header('location: /home');
}
session_start();
use App\Model\Login;


$isemptyUsername = empty($_POST['Login']);
$isemptyPassword = empty($_POST['Password']);
$issetVar = isset($_POST['Login']) && isset($_POST['Password']);
$filterUsername = isset($_POST['Login']) ? filter_var($_POST['Login'], FILTER_SANITIZE_STRING) : null;
$filterPassword = isset($_POST['Password']) ? filter_var($_POST['Password'], FILTER_SANITIZE_STRING) : null;


if ($issetVar && !$isemptyUsername && $filterPassword && $filterUsername) {

    $login = new Login($_POST['Password'], $_POST['Login']);
    if ($login->login()) {
        $_SESSION['idUser'] = $login->id();
        $_SESSION['username'] = $login->username($_SESSION['idUser']);
        $_SESSION['password'] = $login->password($_SESSION['idUser']);
        $_SESSION['email'] = $login->email($_SESSION['idUser']);
        $_SESSION['grade'] = $login->grade($_SESSION['idUser']);
        if ($_SESSION['grade'] == 0){
            $_SESSION['grade'] = 'Modo';
        }
        else{$_SESSION['grade'] = 'Admin';}
        require __DIR__.'/WelcomeListController.php';
    } else {?>
         <script> alert('password or username is not valid')</script><?php
    }
}

if (!isset($_SESSION['idUser'])) {
    require __DIR__.'/../view/login.php';
}


?>


