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

    public function getUpdatePoeple($param)
    {
        $query = $this->db->prepare("SELECT * FROM people WHERE id = $param");
        $query->execute();
        $this->query = $query;
        return $this->query;
    }
    public function setUpdatePoeple($param)
    {
        $query = $this->db->prepare("UPDATE people SET firstname = ?, lastname = ?, email = ?, company_id= ? WHERE id = ?");
        $query->execute($param);
        $this->query = $query;
    }
}
