<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: /connect');
}
require 'header.php';


?>
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
            <?php
            foreach ($_SESSION['invoice'] as $invoice) {
                ?>
                <tr>
                    <td><?php echo $invoice["number"] ?></td>
                    <td><?php echo $invoice["date"] ?></td>
                    <td><?php echo $invoice["name"] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <label for="contact">Last Contact :</label>
        <table id='contact'>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Company</th>
            </tr>
            <?php
            foreach ($_SESSION['contact'] as $contact) {
                ?>
                <tr>
                    <td><?php echo $contact["firstname"] ?></td>
                    <td><?php echo $contact["email"] ?></td>
                    <td><?php echo $contact["name"] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <label for="companies">Last Companies :</label>
        <table id='companies'>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Company</th>
            </tr>
            <?php
            foreach ($_SESSION['compagnie'] as $compagnie) {
                ?>
                <tr>
                    <td><?php echo $compagnie["name"] ?></td>
                    <td><?php echo $compagnie["VAT_number"] ?></td>
                    <td><?php echo $compagnie["type"] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

<?php require 'footer.php';
