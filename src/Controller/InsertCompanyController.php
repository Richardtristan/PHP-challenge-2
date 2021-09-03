<?php
if (!isset($_SESSION['username'])) {
    header('location: /login');
}
use App\Model\InsertData;
use App\Model\CompanyList;
use App\Model\ContactList;
use App\Model\TypeList;

$newCompany = new InsertData();
$selectTypes = new TypeList();

$selectTypes->setAllList();

$selectTypes = $selectTypes->getAllList()->fetchAll();

//Sanitizing Part
$issetVar = isset($_POST['companyName']) && isset($_POST['country']) && isset($_POST['vat']) && isset($_POST['type']);

function insert(){
  $newContact = new InsertData();
  $newContact->insertCompany($_POST['companyName'], $_POST['country'], $_POST['vat'], intval($_POST['type']));
}

if ($issetVar)
{
  $inputs = [
    "company" => $_POST['companyName'],
    "country" => $_POST['country'],
    "vat" => $_POST['vat'],
    "type" => $_POST['type'],
  ];
  foreach ($inputs as $key => $value)
  {
    if(empty($value))
    {
      $error[$key] = $key . "\nis required.";
    }
    else
    {
      filter_var($value, FILTER_SANITIZE_STRING);
    }
  }
  if(empty($error)) insert();
}

require __DIR__.'/../view/adding-pages/company_new.php';
