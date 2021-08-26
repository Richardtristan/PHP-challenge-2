<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../../public/assets/js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>COGIP</title>
</head>
<header>
    <nav class="navbar" role="navigation" aria-label="main navigation" id='admin'>

        <div class="navbar-brand">
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="#">Home</a>

                <a class="navbar-item" href="#">Invoices</a>

                <a class="navbar-item" href="#">Contacts</a>
                

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                        Admin
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="#">
                            Members dashboard
                        </a>
                        <a class="navbar-item" href="#">
                            New contact
                        </a>
                        <a class="navbar-item" href="#">
                            New invoice
                        </a>
                        <a class="navbar-item" href="#">
                            New company
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Log out</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>
<body>