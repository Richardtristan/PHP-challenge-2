<?php

namespace App\Model;

class CompanyList{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setAllList()
    {
        $query = $this->db->prepare("SELECT c.id as id_company, c.name, VAT_number, country, t.name as type FROM company as c INNER JOIN type as t ON c.type_id = t.id ORDER BY c.id ASC");
        $query->execute();
        $this->query = $query;
    }

    public function getAllList()
    {
        return $this->query;
    }
}
