<?php

use App\Model\DeleteData;

$user = new DeleteData();



$issetNon = isset($_POST['non']);
$issetOui = isset($_POST['oui']);

if ($issetNon){
    header('location: /home');
}

if ($issetOui){
    $user->DeleteData([
        'invoice',
        $id
    ]);
    header('location: /home');
}
require __DIR__.'/../view/admin/deleteData.php';
