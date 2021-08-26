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
         require 'footer.php';