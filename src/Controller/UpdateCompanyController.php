<?php

use App\Model\UpdateCompany;
use App\Model\TypeList;

$isemptyName = empty($_POST['name']);
$isemptyVAT = empty($_POST['vat']);
$isemptyType = empty($_POST['type']);
$isemptyCountry = empty($_POST['country']);
$issetVar = isset($_POST['name']) && isset($_POST['vat']) && isset($_POST['type']) && isset($_POST['country']);
$filterName = isset($_POST['name']) ? trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING)) : null;
$filterVAT = isset($_POST['vat']) ? trim(filter_var($_POST['vat'], FILTER_SANITIZE_STRING)) : null;
$filterType = isset($_POST['type']) ? trim(filter_var($_POST['type'], FILTER_SANITIZE_STRING)) : null;
$filterCountry = isset($_POST['country']) ? trim(filter_var($_POST['country'], FILTER_SANITIZE_STRING)) : null;

$types = new TypeList();
$types->setAllList();
$types = $types->getAllList()->fetchAll();


$company = new UpdateCompany();
$company = $company->getUpdateCompany($id)->fetch();

$update = new UpdateCompany();

if (!$isemptyName && !$isemptyVAT && !$isemptyType && !$isemptyCountry && $issetVar) {
    $update->setUpdateCompany([
        $filterName,
        $filterCountry,
        $filterVAT,
        intval($filterType),
        $id
    ]);
}


require __DIR__ . '/../view/modify-pages/modify_company.php';
