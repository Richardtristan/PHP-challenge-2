<?php


session_start();
if (!isset($_SESSION['username'])) {
    header('location: /connect');
}
require 'header.php';
require "../Controller/WelcomeListController.php";

?>
    <body> <!-- Insert header here --> <h1>Welcome to the COGIP</h1>
<p>Bonjour !</p>
<div><label for="invoice">Last invoice :</label>
    <table id='invoice'>
        <tr>
            <th>Invoice number</th>
            <th>Dates</th>
            <th>Company</th>
        </tr> <?php  while ($data = $invoices->getWelcomeList()->fetch()) { ?>
            <tr>
                <td><?php echo $data["number"] ?></td>
                <td><?php echo $data["date"] ?></td>
                <td><?php echo $data["name"] ?></td>
            </tr> <?php } ?> </table>
    <label for="contact">Last Contact :</label>
    <table id='contact'>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Company</th>
        </tr> <?php while ($data = $contacts->getWelcomeList()->fetch()) { ?>
            <tr>
                <td><?php echo $data["firstname"] ?></td>
                <td><?php echo $data["email"] ?></td>
                <td><?php echo $data["name"] ?></td>
            </tr> <?php } ?> </table>
    <label for="companies">Last Companies :</label>
    <table id='companies'>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Company</th>
        </tr> <?php while ($data = $companies->getWelcomeList()->fetch()) { ?>
            <tr>
                <td><?php echo $data["name"] ?></td>
                <td><?php echo $data["VAT_number"] ?></td>
                <td><?php echo $data["type"] ?></td>
            </tr> <?php } ?> </table>
</div> <?php require 'footer.php';