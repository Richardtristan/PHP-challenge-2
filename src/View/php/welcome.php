<?php
session_start();
if (!isset($_SESSION['username'])){
    header('location: /connect');
}
require 'header.php';
?>

    <body>
    <!-- Insert header here -->
    <h1>Welcome to the COGIP</h1>
    <p>Bonjour !</p>
    <div>
        <label for="invoice">Last invoice :</label>
        <table id='invoice'>
            <tr>
                <th>Invoice number</th>
                <th>Dates</th>
                <th>Company</th>
            </tr>
            <tr>
                <td>xInvoice</td>
                <td>xDate</td>
                <td>xCompany</td>
            </tr>
        </table>
        <label for="contact">Last contacts :</label>
        <table id='contact'>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>e-mail</th>
                <th>Company</th>
            </tr>
            <tr>
                <td>xName</td>
                <td>xPhone</td>
                <td>xe-mail</td>
                <td>xCompany</td>
            </tr>
        </table>
        <label for="companies">Last companies :</label>
        <table id='companies'>
            <tr>
                <th>Name</th>
                <th>TVA</th>
                <th>Country</th>
                <th>Type</th>
            </tr>
            <tr>
                <td>xName</td>
                <td>xTVA</td>
                <td>xCountry</td>
                <td>xType</td>
            </tr>
        </table>
    </div>
    <?php require 'footer.php';
