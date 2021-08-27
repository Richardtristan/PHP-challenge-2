<?php
?>

<footer>
    <?php if (isset($_SESSION['username'])){?>
    <p class='connexion'>You are connected as : <?php echo $_SESSION['username'] ?> </p><br><?php }?>
    <p class='slogan'>Vive la COGIP ! </p>
</footer>

</html>



