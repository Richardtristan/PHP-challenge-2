<?php require __DIR__.'/../surround/header.php'; ?>
<div class='block'>
    <h1 class='Hhome'>Invoice : <?php echo $invoice["number"] ?></h1>
<div class='tables'>
    <label for="invoiceCompany">Company linked to the invoice :</label>
    <table id='invoiceCompany'>
    <thead>
        <tr>
            <th>Name</th>
            <th>TVA</th>
            <th>Company type</th>
        </tr>
        </thead>
        <?php foreach ($companies as $company) {
        ?>
        <tbody>
        <tr>
            <td><?php echo $company["name"] ?></td>
            <td><?php echo $company["VAT_number"] ?></td>
            <td><?php echo $company["type"] ?></td>
        </tr>
        <?php
            }
            ?>
        </tbody>
    </table>

    <label for="contactPerson">Contact person :</label>
    <table id='contactDetails'>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <?php foreach ($contacts as $contact) {
        ?>
        <tbody>
        <tr>
            <td><?php echo $contact["lastname"] . " " . $contact["firstname"] ?></td>
            <td><?php echo $contact["email"] ?></td>
        </tr>
        <?php
            }
            ?>
        </tbody>
    </table>
</div>
        </div>
<?php require __DIR__.'/../surround/footer.php' ?>
