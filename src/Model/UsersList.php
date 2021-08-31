<?php

namespace App\Model;

class UsersList
{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setUsersList()
    {
        $query = $this->db->prepare("SELECT * FROM users");
        $query->execute();
        $this->query = $query;
    }

    public function getUsersList()
    {
        return $this->query;
    }
}
