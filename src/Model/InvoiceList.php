<?php

namespace App\Model;

class InvoiceList{

    public function __construct()
    {
        global $db;
        $this->db = $db;
        $query;
    }

    public function setAllList()
    {
        $query = $this->db->prepare("SELECT i.id as invoice_id, number, date, c.name as name, t.name as type FROM invoice as i INNER JOIN company as c ON i.company_id = c.id INNER JOIN type as t ON c.type_id = t.id ORDER BY date ASC");
        $query->execute();
        $this->query = $query;
    }

    public function getAllList()
    {
        return $this->query;
    }
}
