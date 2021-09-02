<?php require __DIR__.'/../surround/header.php' ?>

<form action="" method='POST'>
  <div class="">
    <label for="invoiceDate">Invoice date</label>
    <input type="date" name="invoiceDate" id="invoiceDate">
  </div>
  <div class="">
    <label for="company">Company</label>
    <select name="company" id="company">
    <?php foreach ($selectCompanies as $data)
    {
      ?>
      <option value='<?php echo $data['id_company']?>'><?php echo $data["name"] ?></option>
      <?php
    }
    ?>
    </select>
  </div>
  <div class="">
    <label for="contact">Contact person regarding the invoice</label>
    <select name="contact" id="contact">
      <?php foreach ($selectContacts as $data)
      {
        ?>
        <option value='<?php echo $data['id']?>'><?php echo $data["lastname"] . " " . $data["firstname"] ?></option>
        <?php
      }
      ?>
    </select>
  </div>
  <div class="">
    <input type="submit" value="Submit">
  </div>
</form>

<?php require __DIR__.'/../surround/footer.php' ?>
