<?php require __DIR__.'/../surround/header.php'; ?>
<div class='block'>
<h1 class='Hhome'>Contact : <!--Insert contact name--></h1>
<div class='tables'>
    <table id='introDetails'>
    <thead>
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
        <thead>
    </table>
    <label for="contactDetails">Invoices linked to <?php echo $contact["lastname"] . " " . $contact["firstname"] ?></label>
    <table id='contactDetails'>
    <thead>
        <tr>
            <th>Invoice number</th>
            <th>Date</th>
        </tr>
        </thead>
        <?php foreach ($invoices as $invoice) {
        ?>
        <tbody>
        <tr>
            <td><?php echo $invoice["number"] ?></td>
            <td><?php echo $invoice["date"] ?></td>
        </tr>
        <?php
            }
            ?>
            
    </table>
</div>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
