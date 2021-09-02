<?php

use App\Model\CompanyList;


$companies = new CompanyList();



$companies->setAllList();



$company = $companies->getAllList()->fetchAll();
require __DIR__.'/../view/Lists/companies_list.php';


//$_SESSION['companies_all'] = $companies->getAllList()->fetchAll();

//header('location: /companies_list');
