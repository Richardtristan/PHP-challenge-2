<?php

use App\Model\InvoiceDetails;

$invoice = new InvoiceDetails();
$companies = new InvoiceDetails();
$contacts = new InvoiceDetails();

$invoice->setInvoice($id);
$invoice = $invoice->getData()->fetch();
$companies->setLinkedCompanies($id);
$companies = $companies->getData()->fetchAll();
$contacts->setLinkedContacts($id);
$contacts = $contacts->getData()->fetchAll();

require __DIR__.'/../view/Details/invoice_details.php';
