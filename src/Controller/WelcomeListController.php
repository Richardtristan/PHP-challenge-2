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

$invoice = $invoices->getWelcomeList()->fetchAll();
$contact = $contacts->getWelcomeList()->fetchAll();
$company = $companies->getWelcomeList()->fetchAll();
require __DIR__.'/../view/home.php';
