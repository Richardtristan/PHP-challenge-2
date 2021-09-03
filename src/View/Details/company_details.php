<?php require __DIR__.'/../surround/header.php'; ?>
<div class='block'>
    <h1 class='Hhome'>Company : <?php echo $company["name"] ?></h1>
    <div class='tables'>
    <table id='introDetails'>
    <thead>
        <tr>
            <th>TVA</th>
            <td><?php echo $company["VAT_number"] ?></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><?php echo $company["type"] ?></td>
        </tr>
        </thead>
    </table>

    <label for="companyDetails">Contact persons :</label>
    <table id='companyDetails'>
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
            <td><?php echo $contact["firstname"] . " " . $contact["lastname"] ?></td>
            <td><?php echo $contact["email"] ?></td>
        </tr>
        <?php
            }
            ?>
        </tbody>
    </table>

    <label for="factures">Invoices :</label>
    <table id='factures'>
    <thead>
        <tr>
            <th>Invoice number</th>
            <th>Date</th>
            <th>Contact person</th>
        </tr>
        </thead>
        <?php foreach ($invoices as $invoice)
        { ?>
        <tbody>
        <tr>
            <td><?php echo $invoice["number"] ?></td>
            <td><?php echo $invoice["date"] ?></td>
            <td><?php echo $invoice["email"] ?></td>
        </tr>
        <?php
        } ?>
        </tbody>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
