<?php

namespace App\Model;

class TypeList{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setAllList()
    {
        $query = $this->db->prepare("SELECT id, name FROM type ORDER BY name ASC");
        $query->execute();
        $this->query = $query;
    }

    public function getAllList()
    {
        return $this->query;
    }
}
