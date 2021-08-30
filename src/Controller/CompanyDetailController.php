<?php

use App\Model\OneList;

$company = new OneList();
$linkedData = new OneList();

$company->setOneList([
    "c.name, VAT_number, t.name as type",
    "company as c",
    "type as t",
    "c.type_id = t.id",
    "c.id = $id"
]);

$linkedData->setOneList([
    "i.number, i.date, p.lastname , p.firstname, p.email",
    "invoice as i",
    "people as p",
    "i.people_id = p.id",
    "i.company_id = $id"
]);

$company = $company->getOneList()->fetch();
$linkedData = $linkedData->getOneList()->fetchAll();

require __DIR__.'/../view/Details/company_details.php';
