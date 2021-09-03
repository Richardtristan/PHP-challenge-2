<?php require __DIR__.'/../surround/header.php' ?>
<div class="block">
<div class="login">
<label for="newCompany"  class='Hhome'>New company :</label>
<form method='post' class='logForm' id='newCompany'>

    <label for="companyName">Company name</label>
    <input type="text" name="companyName" id="companyName">
    <span><?php echo $error["company"] ?></span>


    <label for="country">Country</label>
    <input type="text" name="country" id="country">
    <span><?php echo $error["country"] ?></span>


    <label for="vat">VAT number</label>
    <input type="text" name="vat" id="vat">
    <span><?php echo $error["vat"] ?></span>


    <label for="type">Type</label>
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
</div>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
