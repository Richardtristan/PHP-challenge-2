<?php

use App\Model\AllList;


$companies = new AllList();



$companies->setAllList([
    "c.name, VAT_number, country, t.name as type",
    "company as c",
    "type as t",
    "c.type_id = t.id",
    "c.id"
]);


$_SESSION['companies_all'] = $companies->getAllList()->fetchAll();

header('location: /companies_list');