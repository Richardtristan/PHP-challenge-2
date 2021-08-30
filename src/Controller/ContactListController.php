<?php

use App\Model\AllList;


$contacts = new AllList();



$contacts->setAllList([
  "*",
  "people as p",
  "company as c",
  "p.company_id = c.id",
  "p.id"
]);

$contact = $contacts->getAllList()->fetchAll();
require __DIR__.'/../view/Lists/contact_list.php';

//$_SESSION['contact_all'] = $contacts->getAllList()->fetchAll();

//header('location: /contact_list');
