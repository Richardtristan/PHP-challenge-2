<?php

namespace App\Model;

class TypedCompany{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setClientList()
    {
      $query = $this->db->prepare("SELECT c.id as id_company, c.name, VAT_number, country, t.name as type FROM company as c INNER JOIN type as t ON c.type_id = t.id WHERE t.name = 'client' ORDER BY c.id ASC");
      $query->execute();
      $this->query = $query;
    }

    public function setProviderList()
    {
      $query = $this->db->prepare("SELECT c.id as id_company, c.name, VAT_number, country, t.name as type FROM company as c INNER JOIN type as t ON c.type_id = t.id WHERE t.name = 'provider' ORDER BY c.id ASC");
      $query->execute();
      $this->query = $query;
    }

    public function getData()
    {
        return $this->query;
    }
}


?>
