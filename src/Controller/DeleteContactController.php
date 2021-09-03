<?php
if (!isset($_SESSION['username'])) {
    header('location: /login');
}
use App\Model\DeleteData;

$user = new DeleteData();


$issetNon = isset($_POST['non']);
$issetOui = isset($_POST['oui']);

if ($issetNon){
    header('location: /home');
}

if ($issetOui){
    $user->DeleteData([
        'people',
        $id
    ]);
    header('location: /home');
}
require __DIR__.'/../view/admin/deleteData.php';
