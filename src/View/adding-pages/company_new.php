<?php require __DIR__.'/../surround/header.php' ?>

<form action="" method='POST'>

<label for="companyName">Company name</label>
<input type="text" name="companyName" id="companyName">
<label for="tva">Invoice date</label>
<input type="text" name="tva" id="tva">
<label for="company">Company</label>
<select name="company" id="company">
    <option value="">-- Please choose a company --</option>
    <!-- Inject company name options -->
</select>
<input type="submit" value="Submit">
</form>

<?php require __DIR__.'/../surround/footer.php' ?>
