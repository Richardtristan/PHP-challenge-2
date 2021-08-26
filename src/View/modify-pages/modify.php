<?php require 'header.php' ?>

<div class='table'>
    <label for="companyInfo">Changing informations</label>
    <table id='companyInfo'>
        <tr>
            <th>Company</th>
            <td><!--Insert company--></td>
        </tr>
        <tr>
            <th>TVA</th>
            <td><!--Insert TVA number--></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><!--Insert company type--></td>
        </tr>
        <tr>
            <th>Contact</th>
            <td><!--Insert contact--></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><!--Insert email--></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><!--Insert phone--></td>
        </tr>
        <tr>
            <th>Invoice number</th>
            <td><!--Insert invoice number--></td>
        </tr>
    </table>
</div>
<div class='form'>
    <form action="" method="post">
        <label for="name">Modify name of the company</label>
        <input type="text" name="name" id="name">
        <label for="tva">Modify TVA number</label>
        <input type="text" name="tva" id="tva">
        <label for="type">Modify company type</label>
        <input type="text" name="type" id="type">
        <label for="contact">Modify contact</label>
        <input type="text" name="contact" id="contact">
        <label for="email">Modify e-mail</label>
        <input type="email" name="email" id="email">
        <label for="phone">Modify phone number</label>
        <input type="tel" name="phone" id="phone">
        <label for="invoice">Modify invoice number</label>
        <input type="text" name="invoice" id="invoice">
    </form>
</div>

<?php require 'footer.php' ?>