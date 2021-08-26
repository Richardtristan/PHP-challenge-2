<?php

use App\Model\WelcomeList;

$invoices = new WelcomeList();
$contacts = new WelcomeList();
$companies = new WelcomeList();




$invoices->setWelcomeList([
  "*",
  "invoice as i",
  "company as c",
  "i.company_id = c.id",
  "date"
]);

$contacts->setWelcomeList([
  "*",
  "people as p",
  "company as c",
  "p.company_id = c.id",
  "p.id"
]);

$companies->setWelcomeList([
  "c.name, VAT_number, t.name as type",
  "company as c",
  "type as t",
  "c.type_id = t.id",
  "c.id"
]);

$_SESSION['invoice_welcome'] = $invoices->getWelcomeList()->fetchAll();
$_SESSION['contact_welcome'] = $contacts->getWelcomeList()->fetchAll();
$_SESSION['compagnie_welcome'] = $companies->getWelcomeList()->fetchAll();

header('location: /home');