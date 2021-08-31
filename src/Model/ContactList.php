<?php

namespace App\Model;

class ContactList
{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setAllList()
    {
        $query = $this->db->prepare("SELECT * FROM people as p INNER JOIN company as c ON p.company_id = c.id ORDER BY p.id ASC");
        $query->execute();
        $this->query = $query;
    }

    public function getAllList()
    {
        return $this->query;
    }
}
