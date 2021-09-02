<?php require __DIR__.'/../surround/header.php'; ?>
<h1>Contact : <!--Insert contact name--></h1>
<div class='block'>
    <table>
        <tr>
            <th>Contact</th>
            <td><?php echo $contact["lastname"] . " " . $contact["firstname"] ?></td>
        </tr>
        <tr>
            <th>Company</th>
            <td><?php echo $contact["company_name"] ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $contact["email"] ?></td>
        </tr>
    </table>
</div>
<div>
    <label for="contactDetails">Invoices linked to <?php echo $contact["lastname"] . " " . $contact["firstname"] ?></label>
    <table id='contactDetails'>
        <tr>
            <th>Invoice number</th>
            <th>Date</th>
        </tr>
        <?php foreach ($invoices as $invoice) {
        ?>
        <tr>
            <td><?php echo $invoice["number"] ?></td>
            <td><?php echo $invoice["date"] ?></td>
        </tr>
        <?php
            }
            ?>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
