<?php
if (isset($_SESSION['username'])){
    header('location: /welcome');
}
session_start();
require 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
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
<?php require 'footer.php';