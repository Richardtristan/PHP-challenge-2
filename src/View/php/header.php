<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../../../public/assets/js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/main.css">
    <title>COGIP</title>
</head>
<body>

<nav class="navbar">
    <p>Vous êtes connecté en tant que :<?php $_SESSION['Login'] ?> </p>
    <ol>
        <li class="home"><a href="#">Home</a></li>
        <li class="invoices"><a href="#">Invoices</a></li>
        <li class="compagnies"><a href="#">Compagnies</a></li>
        <li class="contacts"><a href="#">Contacts</a></li>
    </ol>
    
    <input class="Logout"
           type="button"
           value="Log out">

</nav>
