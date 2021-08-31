<?php

namespace App\Model;

class ContactDetails
{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setContact($id)
    {
        $query = $this->db->prepare("SELECT p.lastname, p.firstname, p.email, c.name as company_name FROM people as p INNER JOIN company as c ON p.company_id = c.id WHERE p.id = $id");
        $query->execute();
        $this->query = $query;
    }

    public function setLinkedInvoices($id)
    {
        $query = $this->db->prepare("SELECT number, date FROM invoice WHERE people_id = $id ORDER BY date DESC");
        $query->execute();
        $this->query = $query;
    }

    public function getData()
    {
        return $this->query;
    }
}
