<?php

use App\Model\InsertData;
use App\Model\CompanyList;
use App\Model\ContactList;
use App\Model\TypeList;


$newCompany = new InsertData();
$selectTypes = new TypeList();

$selectTypes->setAllList();

$selectTypes = $selectTypes->getAllList()->fetchAll();

require __DIR__.'/../view/adding-pages/company_new.php';
