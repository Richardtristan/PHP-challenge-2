<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: /connect');
}
require 'header.php';

?>
    <body> <!-- Insert header here --> <h1>Welcome to the COGIP</h1>
<p>Bonjour !</p>
<div><label for="invoice">Last invoice :</label>
    <table id='invoice'>
        <tr>
            <th>Invoice number</th>
            <th>Dates</th>
            <th>Company</th>

        </tr> <?php  var_dump($_SESSION['invoice']);
        while ($_SESSION['invoice'] ) { ?>
            <tr>
                <td><?php  echo $_SESSION['invoice']["number"] ?></td>
                <td><?php echo $_SESSION['invoice']["date"] ?></td>
                <td><?php echo $_SESSION['invoice']["name"] ?></td>
            </tr> <?php } ?> </table>
    <label for="contact">Last Contact :</label>
    <table id='contact'>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Company</th>
        </tr> <?php foreach ($_SESSION['contact'] as $contacts) { ?>
            <tr>
                <td><?php echo $contacts["firstname"] ?></td>
                <td><?php echo $contacts["email"] ?></td>
                <td><?php echo $contacts["name"] ?></td>
            </tr> <?php } ?> </table>
    <label for="companies">Last Companies :</label>
    <table id='companies'>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Company</th>
        </tr> <?php foreach ($_SESSION['compagnie'] as $companies) { ?>
            <tr>
                <td><?php echo $companies["name"] ?></td>
                <td><?php echo $companies["VAT_number"] ?></td>
                <td><?php echo $companies["type"] ?></td>
            </tr> <?php } ?> </table>
</div> <?php require 'footer.php';