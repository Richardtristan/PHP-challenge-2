<?php
namespace App\Model;

class UpdatePoeple
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setUpdatePoeple($param)
    {
        $query = $this->db->prepare("UPDATE people SET id = $param[0], firstname = $param[1], lastname = $param[2], email = $param[3], company_id= $param[4]");
        $query->execute();
        $this->query = $query;
    }
}
