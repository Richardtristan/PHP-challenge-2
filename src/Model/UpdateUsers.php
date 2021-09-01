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

    public function UpdateUserExist($post)
    {
        $usernameUpdate = $this->db->prepare("SELECT username FROM users WHERE username = ?");
        $usernameUpdate->execute([$post]);
        $userUpdate = $usernameUpdate->fetch();
        return $userUpdate;
    }

    public function UpdateEmailExist($post)
    {
        $EmailUpdate = $this->db->prepare("SELECT email FROM users WHERE email = ?");
        $EmailUpdate->execute([$post]);
        $mailUpdate = $EmailUpdate->fetch();
        return $mailUpdate;
    }
}