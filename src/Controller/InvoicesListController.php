<?php

use App\Model\InvoiceList;


$invoices = new InvoiceList();
$invoices->setAllList();

$invoices = $invoices->getAllList()->fetchAll();
require __DIR__.'/../view/Lists/invoices_list.php';

//$_SESSION['invoices_all'] = $invoicesAll->getAllList()->fetchAll();

//header('location: /invoices_list');
