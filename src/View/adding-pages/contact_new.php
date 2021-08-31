<?php require __DIR__.'/../surround/header.php' ?>

<form action="" method='POST'>

<label for="lastname">Lastame</label>
<input type="text" name="lastname" id="lastname">
<label for="firstname">Firstname</label>
<input type="text" name="firstname" id="firstname">
<label for="email">Email</label>
<input type="email" name="email" id="email">
<label for="company">Company</label>
<select name="company" id="company">
  <?php foreach ($companies as $data) {
      ?>
      <option value='<?php echo $data['id']?>'><?php echo $data["name"] ?></option>
      <?php
  }
  ?>
</select>
<input type="submit" id="submit" value="Submit">
</form>

<?php var_dump($_POST) ; require __DIR__.'/../surround/footer.php' ?>
