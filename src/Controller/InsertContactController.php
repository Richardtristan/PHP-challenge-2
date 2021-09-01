<?php

use App\Model\InsertData;

use App\Model\CompanyList;
use App\Model\ContactList;


$companies = new CompanyList();

$companies->setAllList();

$companies = $companies->getAllList()->fetchAll();

//Sanitizing Part
$issetVar = isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['company']);

function insert(){
  $newContact = new InsertData();
  $newContact->insertContact($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["company"]);
  echo "done";
  var_dump($newContact);
}

if ($issetVar)
{
  $inputs = [
    "lastname" => $_POST['lastname'],
    "firstname" => $_POST['firstname'],
    "email" => $_POST['email']
  ];
  foreach ($inputs as $key => $value)
  {
    if(empty($value))
    {
      $error[$key] = $key . "\nis required.";
    }
    else
    {
      if ($key === "email")
      {
        $email = filter_var($value, FILTER_SANITIZE_EMAIL);
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        {
          $error[$key] = $key . "\nis invalid.";
        }
      }
      else
      {
        filter_var($value, FILTER_SANITIZE_STRING);
      }
    }
  }
  var_dump($_POST);
  if(empty($error)) insert();
}

require __DIR__.'/../view/adding-pages/contact_new.php';
