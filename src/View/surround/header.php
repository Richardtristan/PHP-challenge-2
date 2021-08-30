<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php dirname(__FILE__)?>../../../../assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php dirname(__FILE__)?>../../../../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php dirname(__FILE__)?>../../../../assets/css/blob.css">
    <link rel="stylesheet" type="text/css" href="<?php dirname(__FILE__)?>../../../../assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="<?php dirname(__FILE__)?>../../../../assets/css/header.css">
    <title>COGIP</title>
</head>

<header>
    <?php if(!isset($_SESSION['username'])){echo'
    <nav class="navbar" role="navigation" aria-label="main navigation" id="user">

        <div class="navbar-brand">
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/login">Home</a>

                <a class="navbar-item" href="/invoice">Invoices</a>

                <a class="navbar-item" href="/contact">Contacts</a>

                <a class="navbar-item" href="/companies">Companies</a>
            </div>
        </div>
    </nav>
    </header>
' ; } ?>
    <?php if(isset($_SESSION['username'])){echo'
    <div id="gradient">
    <nav class="navbar" role="navigation" aria-label="main navigation" id="admin">

        <div class="navbar-brand">
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/home">Home</a>

                <a class="navbar-item" href="/invoice">Invoices</a>

                <a class="navbar-item" href="/contact">Contacts</a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/companies" >
                        Companies
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/companies_client">
                            Clients
                        </a>
                        <a class="navbar-item" href="/companies_suppliers">
                            Suppliers
                        </a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                        Admin
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/member_dashboard">
                            Members dashboard
                        </a>
                        <a class="navbar-item" href="/new_contact">
                            New contact
                        </a>
                        <a class="navbar-item" href="/new_invoice">
                            New invoices
                        </a>
                        <a class="navbar-item" href="/new_companies">
                            New companies
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                       
                        <a class="button is-primary" href="/logout">
                             <strong>Log out</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </div>
    </header>

' ; } ?>


    <body>