<?php namespace App\Model;
class UpdateCompany
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function getUpdateCompany($param)
    {
        $query = $this->db->prepare("SELECT * FROM company WHERE id = $param");
        $query->execute();
        $this->query = $query;
        return $this->query;
    }

    public function setUpdateCompany($param)
    {
        $query = $this->db->prepare("UPDATE company SET name = ?, country = ?, VAT_number = ?, type_id = ? WHERE id = ?");
        $query->execute($param);
        $this->query = $query;
    }

}
