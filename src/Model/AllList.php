<?php

namespace App\Model;

class AllList{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setAllList($param)
    {
        $query = $this->db->prepare("SELECT $param[0] FROM $param[1] INNER JOIN $param[2] ON $param[3] ORDER BY $param[4] ASC");
        $query->execute();
        $this->query = $query;
    }

    public function getAllList()
    {
        return $this->query;
    }
}
