<?php

use App\Model\UsersList;

if ($_SESSION['grade'] === 'Admin'){
$users = new \App\Model\UsersList();
$users->setUsersList();

$users = $users->getUsersList()->fetchAll();
require __DIR__.'/../view/admin/admin_dashboard.php';
}else{header('location: /home');}

//$_SESSION['invoices_all'] = $invoicesAll->getAllList()->fetchAll();

//header('location: /invoices_list');
