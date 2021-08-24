<?php


use App\Model\ConnectDb;
use App\Helper\Form;
use App\Model\Login;


session_start();


$isemptyUsername = empty($_POST['Login']);
$isemptyPassword = empty($_POST['Password']);
$issetVar = isset($_POST['Login']) && isset($_POST['Password']);
$filterUsername = isset($_POST['Login']) ? filter_var($_POST['Login'], FILTER_SANITIZE_STRING) : null;
$filterPassword = isset($_POST['Password']) ? filter_var($_POST['Password'], FILTER_SANITIZE_STRING) : null;

$connection = new ConnectDb('127.0.0.1', 'cogip', 'root', '');
$db = $connection->getPdo();
$form = new Form();

if ($issetVar && !$isemptyUsername && $filterPassword && $filterUsername) {
    $login = new Login($_POST['Password'], $_POST['Login']);
    if ($login->login()) {
        $_SESSION['idUser'] = $login->id();
        $_SESSION['username'] = $login->username($_SESSION['idUser']);
        $_SESSION['password'] = $login->password($_SESSION['idUser']);
        $_SESSION['email'] = $login->email($_SESSION['idUser']);
        $_SESSION['grade'] = $login->grade($_SESSION['grade']);
    } else {
        echo '<p>password or username is not valid</p>';
    }
}

if (!isset($_SESSION['idUser'])) {

    $form->openForm('post', '#');

    echo $form->textarea('Login', '');
    if ($isemptyUsername) {
        echo "<p>cette valeur est obligatoire </p>";
    }
    echo $form->textarea('Password', '');
    if ($isemptyPassword) {
        echo "<p>cette valeur est obligatoire </p>";
    }
    echo $form->submit('se connecter');
    $form->closeForm();

} else {
    echo $form->button('se deconnecter', '/logout.php') . "Vous êtes connecté en tant que " . $_SESSION['username']. '<br>';
}

