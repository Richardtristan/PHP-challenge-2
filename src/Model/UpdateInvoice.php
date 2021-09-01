<?php namespace App\Model;
class UpdateInvoice
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function getUpdateInvoice($param)
    {
        $query = $this->db->prepare("SELECT * FROM invoice WHERE id = $param");
        $query->execute();
        $this->query = $query;
        return $this->query;
    }
    public function setUpdateInvoice($param)
    {
        $query = $this->db->prepare("UPDATE invoice SET number = ?, date = ?, people_id = ?, company_id= ?");
        $query->execute($param);
        $this->query = $query;
    }
}