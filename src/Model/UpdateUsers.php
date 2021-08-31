<?php namespace App\Model;
class UpdateUsers
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
        $request;
    }

    public function getUpdateUsers($param)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE id = $param");
        $query->execute();
        $this->query = $query;
        return $this->query;
    }

    public function setUpdateUsers($params)
    {
        $request = $this->db->prepare("UPDATE users SET username = ? , password = ? , email = ? , grade = ? WHERE id = ?");
        $request->execute($params);
    }
}