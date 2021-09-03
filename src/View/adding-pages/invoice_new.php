<?php require __DIR__.'/../surround/header.php' ?>
<div class="block">
<div class="login">
<label for="newInvoice"  class='Hhome'>New invoice :</label>
<form method='post' class='logForm' id='newInvoice'>

    <label for="invoiceDate">Invoice date</label>
    <input type="date" name="invoiceDate" id="invoiceDate">

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
 

    <input type="submit" value="Submit">

</form>
</div>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
