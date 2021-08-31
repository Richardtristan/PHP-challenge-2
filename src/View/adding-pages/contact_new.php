<?php require __DIR__.'/../surround/header.php' ?>

<form action="" method='POST'>

<label for="name">Lastame</label>
<input type="text" name="name" id="name">
<label for="firstName">Firstname</label>
<input type="text" name="firstname" id="firstName">
<label for="email">Email</label>
<input type="email" name="email" id="email">
<label for="company">Company</label>
<select name="company" id="company">
  <?php foreach ($selectCompanies as $data) {
      ?>
      <option value='<?php echo $data['id']?>'><?php echo $data["name"] ?></option>
      <?php
  }
  ?>
</select>
<input type="submit" value="Submit">
</form>

<?php require __DIR__.'/../surround/footer.php' ?>
