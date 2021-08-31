<?php

use App\Model\InsertData;
use App\Model\CompanyList;
use App\Model\ContactList;


$newContact = new InsertData();
$selectCompanies = new CompanyList();

$selectCompanies->setAllList();

$selectCompanies = $selectCompanies->getAllList()->fetchAll();

require __DIR__.'/../view/adding-pages/contact_new.php';
