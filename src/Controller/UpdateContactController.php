<?php


use App\Model\CompanyList;
use App\Model\UpdatePoeple;


$isemptyContactFirstname = empty($_POST['Update_contact_firstname']);
$isemptyContactLastname = empty($_POST['Update_contact_lastname']);
$isemptyIdCompany = empty($_POST['update_company_id']);
$isemptyEmailContact = empty($_POST['Update_contact_email']);
$issetVar = isset($_POST['Update_contact_firstname']) && isset($_POST['Update_contact_lastname']) && isset($_POST['update_company_id']) && isset($_POST['Update_contact_email']);
$filterFirstname = isset($_POST['Update_contact_firstname']) ? trim(filter_var($_POST['Update_contact_firstname'], FILTER_SANITIZE_STRING)) : null;
$filterLastname = isset($_POST['Update_contact_lastname']) ? trim(filter_var($_POST['Update_contact_lastname'], FILTER_SANITIZE_STRING)) : null;
$filterEmailContact = isset($_POST['Update_contact_email']) ? trim(filter_var($_POST['Update_contact_email'], FILTER_VALIDATE_EMAIL)) : null;
$filterIdCompany  = isset($_POST['update_company_id']) ? filter_var($_POST['update_company_id'], FILTER_SANITIZE_STRING) : null;

$companies = new CompanyList();
$companies->setAllList();
$companies = $companies->getAllList()->fetchAll();


$poeple = new UpdatePoeple();
$poeple = $poeple->getUpdatePoeple($id)->fetch();


$company = new UpdatePoeple();

if (!$isemptyContactFirstname && !$isemptyContactLastname && !$isemptyIdCompany && !$isemptyEmailContact && $issetVar) {

    $company->setUpdatePoeple([
        $filterFirstname,
        $filterLastname,
        $filterEmailContact,
        $filterIdCompany,
        $id
    ]);
}


require __DIR__ . '/../view/modify-pages/modify_contact.php';
