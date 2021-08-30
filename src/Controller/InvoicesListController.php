<?php

use App\Model\AllList;


$invoicesAll = new AllList();


$invoicesAll->setAllList([
  "number, date, c.name as name, t.name as type",
  "invoice as i",
  "company as c",
  "i.company_id = c.id INNER JOIN type as t ON c.type_id = t.id",
  "date"
]);

$invoices = $invoicesAll->getAllList()->fetchAll();
require __DIR__.'/../view/Lists/invoices_list.php';

//$_SESSION['invoices_all'] = $invoicesAll->getAllList()->fetchAll();

//header('location: /invoices_list');
