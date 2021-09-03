<?php
if (!isset($_SESSION['username'])) {
    header('location: /login');
}

use App\Model\CompanyList;
use App\Model\ContactList;
use App\Model\UpdateInvoice;

$isemptyCompany = empty($_POST['company']);
$isemptyContact = empty($_POST['contact']);
$isemptyDate = empty($_POST['date']);
$issetVar = isset($_POST['company']) && isset($_POST['contact']) && isset($_POST['date']);
$filterCompany = isset($_POST['company']) ? trim(filter_var($_POST['company'], FILTER_SANITIZE_STRING)) : null;
$filterContact = isset($_POST['contact']) ? trim(filter_var($_POST['contact'], FILTER_SANITIZE_STRING)) : null;
$filterDate = isset($_POST['date']) ? trim(filter_var($_POST['date'], FILTER_SANITIZE_STRING)) : null;

$companies = new CompanyList();
$companies->setAllList();
$companies = $companies->getAllList()->fetchAll();

$contacts = new ContactList();
$contacts->setAllList();
$contacts = $contacts->getAllList()->fetchAll();


$invoice = new UpdateInvoice();
$invoice = $invoice->getUpdateInvoice($id)->fetch();

$update = new UpdateInvoice();

if (!$isemptyCompany && !$isemptyContact && !$isemptyDate && $issetVar) {

    $update->setUpdateInvoice([
      $filterDate,
      $filterContact,
      $filterCompany,
      $id
    ]);
}


require __DIR__ . '/../view/modify-pages/modify_invoice.php';
