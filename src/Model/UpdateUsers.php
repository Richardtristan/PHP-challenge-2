<?php namespace App\Model;
class UpdateUsers
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setUpdateUsers($param)
    {
        $query = $this->db->prepare("UPDATE users SET id = $param[0], username = $param[1], password = $param[2], email = $param[3], grade= $param[4]");
        $query->execute();
        $this->query = $query;
    }
}