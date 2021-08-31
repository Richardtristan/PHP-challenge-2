<?php require __DIR__.'/../surround/header.php' ?>

<form action="" method='POST'>

<label for="name">Name</label>
<input type="text" name="name" id="name">
<label for="firstName">First Name</label>
<input type="text" name="firstname" id="firstName">
<label for="phone">Phone</label>
<input type="tel" name="phone" id="phone">
<label for="email">Email</label>
<input type="email" name="email" id="email">
<label for="company">Company</label>
<select name="company" id="company">
    <option value="">-- Please choose a company --</option>
    <!-- Inject company name options -->
</select>
<input type="submit" value="Submit">
</form>

<?php require __DIR__.'/../surround/footer.php' ?>