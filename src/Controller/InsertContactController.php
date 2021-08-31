<?php

use App\Model\InsertData;

use App\Model\CompanyList;
use App\Model\ContactList;


$companies = new CompanyList();

$companies->setAllList();

$companies = $companies->getAllList()->fetchAll();

$isemptyLastname = empty($_POST['lastname']);
$isemptyFirstname = empty($_POST['firstname']);
$isemptyEmail = empty($_POST['email']);
$issetVar = isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']);
$filterLastname = isset($_POST['lastname']) ? filter_var($_POST['lastname'], FILTER_SANITIZE_STRING) : null;
$filterFirstname = isset($_POST['lastname']) ? filter_var($_POST['lastname'], FILTER_SANITIZE_STRING) : null;
$filterEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;

require __DIR__.'/../view/adding-pages/contact_new.php';
