<?php

use App\Model\ContactList;


$contacts = new ContactList();



$contacts->setAllList();

$contacts = $contacts->getAllList()->fetchAll();
require __DIR__.'/../view/Lists/contact_list.php';
