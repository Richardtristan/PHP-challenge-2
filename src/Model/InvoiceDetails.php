<?php

namespace App\Model;

class InvoiceDetails
{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setInvoice($id)
    {
        $query = $this->db->prepare("SELECT number FROM invoice WHERE id = $id");
        $query->execute();
        $this->query = $query;
    }

    public function setLinkedCompanies($id)
    {
        $query = $this->db->prepare("SELECT c.name as name, VAT_number, t.name as type FROM company as c INNER JOIN type as t ON c.type_id = t.id INNER JOIN invoice as i ON i.company_id = c.id WHERE i.id = $id ORDER BY name ASC");
        $query->execute();
        $this->query = $query;
    }

    public function setLinkedContacts($id)
    {
        $query = $this->db->prepare("SELECT lastname, firstname, email FROM people as p INNER JOIN invoice as i ON p.id = i.people_id WHERE i.id = $id ORDER BY lastname ASC");
        $query->execute();
        $this->query = $query;
    }

    public function getData()
    {
        return $this->query;
    }
}
