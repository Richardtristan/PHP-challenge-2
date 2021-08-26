<?php
if (isset($_SESSION['username'])){
    header('location: /welcome');
}
session_start();
require 'header.php';
?>


<!-- insert header here -->
<h1>Welcome to the COGIP</h1>
<h2>Bienvenue dans l'espace de connexion de la COGIP</h2>
<form method='post'>
    <label for="username">Votre identifiant</label>
    <input type="text" name="Login" id="username" class='username'>
    <label for="mdp">Votre mot de passe</label>
    <input type="password" name="Password" id="mdp" class='mdp'>
    <input type="submit" value="Se connecter">
</form>
<!-- insert footer here -->


<?php require 'footer.php';