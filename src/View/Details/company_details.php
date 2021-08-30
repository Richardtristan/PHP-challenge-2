<?php require __DIR__.'/../surround/header.php'; ?>
    <h1>Company : <?php echo $company["name"] ?></h1>
<div>
    <table>
        <tr>
            <th>TVA</th>
            <td><?php echo $company["VAT_number"] ?></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><?php echo $company["type"] ?></td>
        </tr>
    </table>
</div>
<div>
    <label for="companyDetails">Contact persons :</label>
    <table id='companyDetails'>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <th><!--Insert contact name--></th>
        <th><!--Insert contact email--></th>
    </table>
</div>
<div>
    <label for="factures">Factures :</label>
    <table id='factures'>
        <tr>
            <th>Invoice number</th>
            <th>Date</th>
            <th>Contact person</th>
        </tr>
        <tr>
            <td><!--Insert Invoice number--></td>
            <td><!--Insert Date--></td>
            <td><!--Insert Contact person--></td>
        </tr>
        <?php foreach ($linkedData as $invoice) {
        ?>
        <tr>
            <td><?php echo $invoice["number"] ?></td>
            <td><?php echo $invoice["date"] ?></td>
            <td><?php echo $invoice["email"] ?></td>
        </tr>
        <?php
            }
            ?>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
