<?php
if (!isset($_SESSION['username'])) {
    header('location: /login');
}
use App\Model\CompanyList;
use App\Model\ContactList;

$companies = new CompanyList();

$companies->setAllList();

$companies = $companies->getAllList()->fetchAll();

require __DIR__.'/../view/adding-pages/contact_new.php';
