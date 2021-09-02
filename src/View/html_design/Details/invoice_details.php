<?php require __DIR__.'/../surround/header.php'; ?>
<h1>Invoice : <?php echo $invoice["number"] ?></h1>
<div class='block'>
    <label for="invoiceCompany">Company linked to the invoice :</label>
    <table id='invoiceCompany'>
        <tr>
            <th>Name</th>
            <th>TVA</th>
            <th>Company type</th>
        </tr>
        <?php foreach ($companies as $company) {
        ?>
        <tr>
            <td><?php echo $company["name"] ?></td>
            <td><?php echo $company["VAT_number"] ?></td>
            <td><?php echo $company["type"] ?></td>
        </tr>
        <?php
            }
            ?>
    </table>
</div>
<div>
    <label for="contactPerson">Contact person :</label>
    <table id='contactDetails'>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach ($contacts as $contact) {
        ?>
        <tr>
            <td><?php echo $contact["lastname"] . " " . $contact["firstname"] ?></td>
            <td><?php echo $contact["email"] ?></td>
        </tr>
        <?php
            }
            ?>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
