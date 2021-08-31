<?php

use App\Model\TypedCompany;

$clients = new TypedCompany();



$clients->setClientList();

$clients = $clients->getData()->fetchAll();

require __DIR__.'/../view/Lists/clients_companies_list.php';
