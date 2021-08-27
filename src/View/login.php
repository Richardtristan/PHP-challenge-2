<?php
if (isset($_SESSION['username'])){
    header('location: /welcome');
}
session_start();
require 'header.php';
?>


<h1>Welcome to the COGIP</h1>
<h2>Please enter your username and password</h2>
<form method='post'>
    <label for="username">Your username</label>
    <input type="text" name="Login" id="username" class='username'>
    <label for="mdp">Your password</label>
    <input type="password" name="Password" id="mdp" class='mdp'>
    <input type="submit" value="Log in">
</form>
<?php require 'footer.php';