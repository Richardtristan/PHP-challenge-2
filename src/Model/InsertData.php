<?php

namespace App\Model;

class InsertData
{
  public function __construct()
  {
      global $db;
      $this->db = $db;
      $query;
      $getLastInvoiceNumber;
  }

  public function getLastInvoiceNumber()
  {
    $getLastInvoiceNumber = $this->db->prepare("SELECT number FROM invoice ORDER BY number DESC LIMIT 1");
    $getLastInvoiceNumber->execute();
    $getLastInvoiceNumber = intval($getLastInvoiceNumber->fetch()["number"]) + 1;
    $this->getLastInvoiceNumber = $getLastInvoiceNumber;
    return $this->getLastInvoiceNumber;
  }

  public function insertInvoice($number, $date, $people_id, $company_id)
  {
    $req = $this->db->prepare("INSERT INTO `invoice` (`number`, `date`, `people_id`, `company_id`) VALUES ('".$number."', '".$date."', '".$people_id."', '".$company_id."')");
    $req->execute(array(
      "number" => $number,
      "date" => $date,
      "people_id" => $people_id,
      "company_id" => $company_id
    ));
  }

  public function insertCompany($name, $country, $VAT_number, $type_id)
  {
    $req = $this->db->prepare("INSERT INTO `company` (`name`, `country`, `VAT_number`, `type_id`) VALUES ('".$name."', '".$country."', '".$VAT_number."', '".$type_id."')");
    $req->execute(array(
      "name" => $name,
      "country" => $country,
      "VAT_number" => $VAT_number,
      "type_id" => $type_id
    ));
  }

  public function insertContact($firstname, $lastname, $email, $company_id)
  {
    $req = $this->db->prepare("INSERT INTO `people` (`firstname`, `lastname`, `email`, `company_id`) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$company_id."')");
    $req->execute(array(
      "firstname" => $firstname,
      "lastname" => $lastname,
      "email" => $email,
      "company_id" => $company_id
    ));
  }
}
