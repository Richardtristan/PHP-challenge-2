<?php

use App\Model\WelcomeList;

$invoices = new WelcomeList();
$contacts = new WelcomeList();
$companies = new WelcomeList();




$invoices->setWelcomeList([
  "i.id as invoice_id, number, date, c.name as name",
  "invoice as i",
  "company as c",
  "i.company_id = c.id",
  "i.id",
  "date"
]);

$contacts->setWelcomeList([
  "p.id as people_id, p.lastname, p.firstname, p.email, c.name as company_name",
  "people as p",
  "company as c",
  "p.company_id = c.id",
  "p.id"
]);

$companies->setWelcomeList([
  "c.id as company_id, c.name, VAT_number, t.name as type",
  "company as c",
  "type as t",
  "c.type_id = t.id",
  "c.id"
]);

$invoice = $invoices->getWelcomeList()->fetchAll();
$contact = $contacts->getWelcomeList()->fetchAll();
$company = $companies->getWelcomeList()->fetchAll();
require __DIR__.'/../view/home.php';
