<?php require __DIR__.'/../surround/header.php'; var_dump($id);?>
    <h1>Company : <!--Insert company name--></h1>
<div>
    <table>
        <tr>
            <th>TVA</th>
            <td><!--Insert TVA number--></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><!--Insert company type--></td>
        </tr>
    </table>
</div>
<div>
    <label for="companyDetails">Contact persons :</label>
    <table id='companyDetails'>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <tr>
            <td><!--Insert Name--></td>
            <td><!--Insert phone--></td>
            <td><!--Insert Email--></td>
        </tr>
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
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
