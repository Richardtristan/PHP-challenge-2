<?php
if (!isset($_SESSION['username'])) {
    header('location: /login');
}
use App\Model\InsertData;
use App\Model\CompanyList;
use App\Model\ContactList;

$selectCompanies = new CompanyList();
$selectContacts = new ContactList();

$selectCompanies->setAllList();
$selectContacts->setAllList();

$selectCompanies = $selectCompanies->getAllList()->fetchAll();
$selectContacts = $selectContacts->getAllList()->fetchAll();

$issetVar = isset($_POST['invoiceDate']) && isset($_POST['contact']) && isset($_POST['company']);

function insert(){
  $newInvoice = new InsertData();
  $newInvoiceNumber = $newInvoice->getLastInvoiceNumber();
  $newInvoice->insertInvoice($newInvoiceNumber, $_POST['invoiceDate'], $_POST['contact'], $_POST['company']);
  var_dump($newInvoice);
}

if ($issetVar)
{
  insert();
}



require __DIR__.'/../view/adding-pages/invoice_new.php';
