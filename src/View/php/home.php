<?php


use App\Helper\Header;
use App\Model\Connect;
use App\Helper\Form;
use App\Model\Login;


session_start();


$isemptyUsername = empty($_POST['Login']);
$isemptyPassword = empty($_POST['Password']);
$issetVar = isset($_POST['Login']) && isset($_POST['Password']);
$filterUsername = isset($_POST['Login']) ? filter_var($_POST['Login'], FILTER_SANITIZE_STRING) : null;
$filterPassword = isset($_POST['Password']) ? filter_var($_POST['Password'], FILTER_SANITIZE_STRING) : null;
$grade = $_SESSION['grade'] = 1 ? 'Modo' : 'Admin';

$header = new Header();
$header->openHtml('public/assets/js/main.js','public/assets/js/main.css', 'cogip');
$form = new Form();


if ($issetVar && !$isemptyUsername && $filterPassword && $filterUsername) {
    $login = new Login($_POST['Password'], $_POST['Login']);
    if ($login->login()) {
        $_SESSION['idUser'] = $login->id();
        $_SESSION['username'] = $login->username($_SESSION['idUser']);
        $_SESSION['password'] = $login->password($_SESSION['idUser']);
        $_SESSION['email'] = $login->email($_SESSION['idUser']);
        $_SESSION['grade'] = $login->grade($_SESSION['idUser']);
    } else {
        echo '<p>password or username is not valid</p>';
    }
}

if (!isset($_SESSION['idUser'])) {
    $header->navNotConnected();
    $form->openForm('post', '');

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

} if (isset($_SESSION['idUser']) && $_SESSION['grade'] == 1 ) {
    $header->navModo(["home","invoice"],["/home","/invoice"]);
     $header->navDeroulantModo(["home","invoice"],["/home","/invoice"]);
    echo $form->button('se deconnecter', 'logout') . "Vous êtes connecté en tant que " . $_SESSION['username']. '<br>'. "votre grade: " ; echo $grade;
}
if (isset($_SESSION['idUser']) && $_SESSION['grade'] == 2 ){
     $header->navAdmin(["home","invoice"],["/home","/invoice"]);
    echo $form->button('se deconnecter', 'logout') . "Vous êtes connecté en tant que " . $_SESSION['username']. '<br>'. "votre grade: " ; echo $grade;
}
if (isset($_SESSION['idUser']) && $_SESSION['grade'] == 0 ){
    echo $form->button('se deconnecter', 'logout') . "Vous êtes connecté en tant que " . $_SESSION['username']. " <br>" . "votre grade: " ; echo $grade;
    echo "You dont have the grade";
}

