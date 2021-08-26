<?php require 'header.php' ?>

<h1>Welcome to the COGIP</h1>
<h2>Bonjour Jean-Christian !</h2>
<h3>Que souhaitez-vous faire aujourd'hui ?</h3>
<button class='invoice'>New Invoice</button>
<button class='contact'>New Contact</button>
<button class='company'>New Company</button>
<div class='invoice'>
    <label for="lastInvoice">Last invoices :</label>
    <table id='lastInvoice'>
        <tr>
            <th>Invoice number</th>
            <th>Dates</th>
            <th>Company</th>
        </tr>
        <tr>
            <td><!--Insert Invoice number--></td>
            <td><!--Insert Dates--></td>
            <td><!--Insert Company--></td>
            <td><input type="image" src="delete.png" alt="delete" width="20px"></td>
        </tr>
    </table>
</div>
<div class='contact'>
    <label for="lastContact">Last contacts :</label>
    <table id='lastContact'>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Company</th>
        </tr>
        <tr>
            <td><!--Insert Name--></td>
            <td><!--Insert Phone--></td>
            <td><!--Insert Email--></td>
            <td><!--Insert Company--></td>
            <td><input type="image" src="delete.png" alt="delete" width="20px"></td>
        </tr>
    </table>
</div>
<div class='company'>
    <label for="lastCompany">Last companies :</label>
    <table id='lastCompany'>
        <tr>
            <th>Name</th>
            <th>TVA</th>
            <th>Country</th>
            <th>Type</th>
        </tr>
        <tr>
            <td><!--Insert Name--></td>
            <td><!--Insert TVA--></td>
            <td><!--Insert Country--></td>
            <td><!--Insert Type--></td>
            <td><input type="image" src="delete.png" alt="delete" width="20px"></td>
        </tr>
    </table>
</div>

<?php require 'footer.php' ?>
