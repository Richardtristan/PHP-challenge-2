<?php require __DIR__.'/../surround/header.php' ?>

<form action="" method='POST'>
  <div class="">
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" id="lastname">
    <span><?php echo $error["lastname"] ?></span>
  </div>

  <div class="">
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" id="firstname">
    <span><?php echo $error["firstname"] ?></span>
  </div>

  <div class="">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <span><?php echo $error["email"] ?></span>
  </div>

  <div class="">
    <label for="company">Company</label>
    <select name="company" id="company">
      <option value="" selected disabled>Select the company...</option>
      <?php foreach ($companies as $data) {
          ?>
          <option value=<?php echo $data['id_company']?>><?php echo $data["name"] ?></option>
          <?php
      }
      ?>
    </select>
  </div>
  <div class="">
    <input type="submit" id="submit" value="Submit">
  </div>
</form>

<?php require __DIR__.'/../surround/footer.php' ?>
