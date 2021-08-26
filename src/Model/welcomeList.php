<?php namespace App\Model;
class WelcomeList
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setWelcomeList($param)
    {
        $query = $this->db->prepare("SELECT $param[0] FROM $param[1] INNER JOIN $param[2] ON $param[3] ORDER BY $param[4] DESC LIMIT 5");
        $query->execute();
        $this->query = $query;
    }

    public function getWelcomeList()
    {
        return $this->query;
    }
}