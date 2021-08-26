<?php
namespace App\Model;
class WelcomeList{


    public function WelcomeList($tableName)
    {
        $invoiceId = $this->db->prepare("SELECT * FROM $tableName ORDER BY date DESC LIMIT 5");
        $invoiceId->execute();
        $invoiceIdFetch = $invoiceId->fetch();
        return $invoiceIdFetch['number'] date company_id;
    }
}