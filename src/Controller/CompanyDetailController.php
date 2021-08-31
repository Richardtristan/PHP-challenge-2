<?php

use App\Model\CompanyDetails;

$company = new CompanyDetails();
$contacts = new CompanyDetails();
$invoices = new CompanyDetails();


$company->setCompany($id);
$company = $company->getData()->fetch();
$contacts->setLinkedContacts($id);
$contacts = $contacts->getData()->fetchAll();
$invoices->setLinkedInvoices($id);
$invoices = $invoices->getData()->fetchAll();

require __DIR__.'/../view/Details/company_details.php';
