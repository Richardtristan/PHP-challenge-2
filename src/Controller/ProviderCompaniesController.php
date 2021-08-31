<?php

use App\Model\TypedCompany;

$providers = new TypedCompany();

$providers->setProviderList();

$providers = $providers->getData()->fetchAll();

require __DIR__.'/../view/Lists/suppliers_companies_list.php';
