<?php

use App\Model\InsertData;
use App\Model\CompanyList;
use App\Model\ContactList;


$newInvoice = new InsertData();
$selectCompanies = new CompanyList();
$selectContacts = new ContactList();

$selectCompanies->setAllList();
$selectContacts->setAllList();

$selectCompanies = $selectCompanies->getAllList()->fetchAll();
$selectContacts = $selectContacts->getAllList()->fetchAll();

require __DIR__.'/../view/adding-pages/invoice_new.php';
