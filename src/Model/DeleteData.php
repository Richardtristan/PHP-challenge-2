<?php namespace App\Model;
class DeleteData
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function DeleteData($param,$id)
    {
        $query = $this->db->prepare("DELETE FROM $param[0] WHERE id = ?]");
        $query->execute($id);
        $this->query = $query;
    }
}