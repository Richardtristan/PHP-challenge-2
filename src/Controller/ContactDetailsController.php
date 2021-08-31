<?php

use App\Model\ContactDetails;

$contact = new ContactDetails();
$invoices = new ContactDetails();

$contact->setContact($id);
$contact = $contact->getData()->fetch();
$invoices->setLinkedInvoices($id);
$invoices = $invoices->getData()->fetchAll();

require __DIR__.'/../view/Details/contact_details.php';
