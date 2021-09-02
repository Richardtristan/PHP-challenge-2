<?php
if (isset($_SESSION['username'])) {
    header('location: /home');
}
session_start();

require 'surround/header.php';
?>
    <!-- insert header here -->
    <!-- <div class='bg-img'> -->
        <div class="block">
            <h1 class='title'>Welcome to the COGIP</h1>


            <h2 class='welcome'>Bienvenue dans l'espace de connexion de la COGIP :</h2>
            <div class="all">
                <!-- <div class="tk-blob" style="--time: 20s; --amount: 5; --fill: #b2d6d0;">
                    <svg width='25%' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 747.2 726.7">
                        <path id="blob"
                              d="M539.8 137.6c98.3 69 183.5 124 203 198.4 19.3 74.4-27.1 168.2-93.8 245-66.8 76.8-153.8 136.6-254.2 144.9-100.6 8.2-214.7-35.1-292.7-122.5S-18.1 384.1 7.4 259.8C33 135.6 126.3 19 228.5 2.2c102.1-16.8 213.2 66.3 311.3 135.4z"></path>
                    </svg>-->
            </div> 

                <div class="login">
                    <form method='post'>
                        <label for="username"></label>
                        <input type="text" name="Login" id="username" class='username' placeholder="Username">
                        <br>
                        <label for="mdp"></label>
                        <input type="password" name="Password" id="mdp" class='mdp' placeholder="Password">
                        <br>
                        <input type="submit" value="Login" class="log">
                    </form>
                </div>
        </div>
    <!-- </div> -->


<?php require 'surround/footer.php';