<?php

use App\Model\AllList;


$companies = new AllList();



$companies->setAllList([
    "c.id as id_company, c.name, VAT_number, country, t.name as type",
    "company as c",
    "type as t",
    "c.type_id = t.id",
    "c.id"
]);



$companie = $companies->getAllList()->fetchAll();
require __DIR__.'/../view/Lists/companies_list.php';

//$_SESSION['companies_all'] = $companies->getAllList()->fetchAll();

//header('location: /companies_list');