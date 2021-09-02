<?php require __DIR__.'/../surround/header.php' ?>

<div class='block'>
<form action="" method='POST'>
  <div class="">
    <label for="companyName">Company name</label>
    <input type="text" name="companyName" id="companyName">
    <span><?php echo $error["company"] ?></span>
  </div>
  <div class="">
    <label for="country">Country</label>
    <input type="text" name="country" id="country">
    <span><?php echo $error["country"] ?></span>
  </div>
  <div class="">
    <label for="vat">VAT number</label>
    <input type="text" name="vat" id="vat">
    <span><?php echo $error["vat"] ?></span>
  </div>
  <div class="">
    <label for="type">Type</label>
    <select name="type" id="type">
      <?php foreach ($selectTypes as $data) {
          ?>
          <option value='<?php echo $data['id']?>'><?php echo $data["name"] ?></option>
          <?php
      }
      ?>
    </select>
  </div>
  <div class="">
    <input type="submit" value="Submit">
  </div>
</form>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
