<?php namespace App\Model;
class UpdateCompany
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setUpdateCompany($param)
    {
        $query = $this->db->prepare("UPDATE company SET id = $param[0], name = $param[1], country = $param[2], VAT_number = $param[3], type_id= $param[4]");
        $query->execute();
        $this->query = $query;
    }

    public function getUpdateCompany()
    {
        return $this->query;
    }
}