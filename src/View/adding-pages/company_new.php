<?php require __DIR__.'/../surround/header.php' ?>

<form action="" method='POST'>

<label for="companyName">Company name</label>
<input type="text" name="companyName" id="companyName">
<label for="country">Country</label>
<input type="text" name="country" id="country">
<label for="company">VAT number</label>
<input type="text" name="vat" id="vat">
<label for="company">Type</label>
<select name="type" id="type">
  <?php foreach ($selectTypes as $data) {
      ?>
      <option value='<?php echo $data['id']?>'><?php echo $data["name"] ?></option>
      <?php
  }
  ?>
</select>
<input type="submit" value="Submit">
</form>

<?php require __DIR__.'/../surround/footer.php' ?>
