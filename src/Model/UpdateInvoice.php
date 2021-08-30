<?php namespace App\Model;
class UpdateInvoice
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setUpdateInvoice($param)
    {
        $query = $this->db->prepare("UPDATE invoice SET id = $param[1], number = $param[2], date = $param[3], people_id = $param[4], company_id= $param[5]");
        $query->execute();
        $this->query = $query;
    }
}