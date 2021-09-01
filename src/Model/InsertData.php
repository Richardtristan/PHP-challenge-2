<?php

namespace App\Model;

class InsertData
{
  public function __construct()
  {
      global $db;
      $this->db = $db;
      $query;
  }

  public function insertInvoice($param)
  {
      $query = $this->db->prepare("INSERT INTO `invoice`(`number`, `date`, `people_id`, `company_id`) VALUES ($param[0],$param[1],$param[2],$param[3])");
      $query->execute();
  }

  public function insertCompany($id)
  {
      $query = $this->db->prepare("SELECT p.lastname, p.firstname, p.email, c.name as company_name FROM people as p INNER JOIN company as c ON p.company_id = c.id WHERE p.id = $id");
      $query->execute();
  }

  public function insertContact($data)
  {
    $sql = "INSERT INTO `people`(`firstname`, `lastname`, `email`, `company_id`) VALUES (`:firstname`, `:lastname`, `:email`, `:company_id`)";
    $query = $this->db->prepare($sql);
    $query->execute([
      ':firstname' => $data[0],
      ':lastname' => $data[1],
      ':email' => $data[2],
      ':company_id' => $data[3]
    ]);
  }
}
