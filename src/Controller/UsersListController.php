<?php

use App\Model\UsersList;


$users = new \App\Model\UsersList();
$users->setUsersList();

$users = $users->getUsersList()->fetchAll();
require __DIR__.'/../view/admin/admin_dashboard.php';

//$_SESSION['invoices_all'] = $invoicesAll->getAllList()->fetchAll();

//header('location: /invoices_list');
