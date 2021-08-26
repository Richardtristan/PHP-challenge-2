<?php require 'header.php' ?>
<h1>Invoice : <!--Insert invoice number--></h1>
<div>
    <label for="invoiceCompany">Company linked to the invoice :</label>
    <table id='invoiceCompany'>
        <tr>
            <th>Name</th>
            <th>TVA</th>
            <th>Company type</th>
        </tr>
        <tr>
            <td><!--Insert Name--></td>
            <td><!--Insert TVA--></td>
            <td><!--Insert Company type--></td>
        </tr>
    </table>
</div>
<div>
    <label for="contactPerson">Contact person :</label>
    <table id='contactDetails'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <tr>
            <td><!--Insert Name--></td>
            <td><!--Insert Email--></td>
            <td><!--Insert Phone--></td>
        </tr>
    </table>
</div>
<?php require 'footer.php' ?>