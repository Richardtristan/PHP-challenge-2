<?php

namespace App\Model;

class CompanyDetails
{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setCompany($id)
    {
        $query = $this->db->prepare("SELECT c.name, VAT_number, t.name as type FROM company as c INNER JOIN type as t ON c.type_id = t.id WHERE c.id = $id");
        $query->execute();
        $this->query = $query;
    }

    public function setLinkedContacts($id)
    {
        $query = $this->db->prepare("SELECT lastname, firstname, email FROM people WHERE company_id = $id ORDER BY lastname ASC");
        $query->execute();
        $this->query = $query;
    }

    public function setLinkedInvoices($id)
    {
        $query = $this->db->prepare("SELECT i.number, i.date, p.email FROM invoice as i INNER JOIN people as p ON i.people_id = p.id WHERE i.company_id = $id ORDER BY date DESC");
        $query->execute();
        $this->query = $query;
    }

    public function getData()
    {
        return $this->query;
    }
}
