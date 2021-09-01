<?php

use App\Model\UpdateUsers;

$isemptyUsername = empty($_POST['update_user']);
$isemptyEmail = empty($_POST['update_email']);
$isemptyPassword = empty($_POST['update_pass']);
$issetVar = isset($_POST['update_user']) && isset($_POST['update_email']) && isset($_POST['update_pass']);
$filterUsername = isset($_POST['update_user']) ? trim(filter_var($_POST['update_user'], FILTER_SANITIZE_STRING)) : null;
$filterEmail = isset($_POST['update_email']) ? trim(filter_var($_POST['update_email'], FILTER_VALIDATE_EMAIL)) : null;
$filterPassword = isset($_POST['update_pass']) ? filter_var($_POST['update_pass'], FILTER_SANITIZE_STRING) : null;
$filterGrade = isset($_POST['update_grade']) ? trim(filter_var($_POST['update_grade'], FILTER_VALIDATE_INT)) : null;

$users = new UpdateUsers();
$user = new UpdateUsers();

$users = $users->getUpdateUsers($id)->fetch();


if (!$isemptyUsername && !$isemptyEmail && !$isemptyPassword &&  $issetVar){
    if ($user->UpdateEmailExist($_POST['update_email'])){
        echo '<script> alert("cette mail exist")</script>';

    if ($user->UpdateUserExist($_POST['update_user'])){
        echo '<script> alert("cette user exist")</script>';
    }
    }
    if (!$user->UpdateUserExist($_POST['update_user']) && !$user->UpdateEmailExist($_POST['update_email'])) {
        $passOk = password_hash($_POST['update_pass'], PASSWORD_BCRYPT);
        $user->setUpdateUsers([
            $filterUsername,
            $passOk,
            $filterEmail,
            $filterGrade,
            $id
        ]);
    }
}


require __DIR__.'/../view/modify-pages/modify_user.php';
