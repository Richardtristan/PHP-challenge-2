<?php require 'header.php' ?>

<form action="" method='POST'>

<label for="invoiceNum">Invoice number</label>
<input type="text" name="invoiceNum" id="invoiceNum">
<label for="invoiceDate">Invoice date</label>
<input type="date" name="invoiceDate" id="invoiceDate">
<label for="company">Company</label>
<select name="company" id="company">
    <option value="">-- Please choose a company --</option>
    <!-- Inject company name options -->
</select>
<label for="contact">Contact person regarding the invoice</label>
<select name="contact" id="contact">
    <option value="">-- Please choose a contact --</option>
    <!-- Inject contact name options -->
</select>
<input type="submit" value="Submit">
</form>

<?php require 'footer.php' ?>