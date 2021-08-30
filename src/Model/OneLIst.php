<?php

namespace App\Model;

class OneList{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setOneList($param)
    {
        $query = $this->db->prepare("SELECT $param[0] FROM $param[1] INNER JOIN $param[2] ON $param[3] WHERE $param[4]");
        $query->execute();
        $this->query = $query;
    }

    public function getOneList()
    {
        return $this->query;
    }
}
