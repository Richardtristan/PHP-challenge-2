<?php require __DIR__.'/../surround/header.php' ?>

<div class="block">
<div class="login">
<label for="newContact"  class='Hhome'>New contact :</label>
<form method='post' class='logForm' id='newContact'>
  
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" id="lastname">
    <span><?php echo $error["lastname"] ?></span>


    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" id="firstname">
    <span><?php echo $error["firstname"] ?></span>



    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <span><?php echo $error["email"] ?></span>


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


    <input type="submit" id="submit" value="Submit">

</form>
</div>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
