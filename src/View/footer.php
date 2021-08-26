<?php
?>

<footer>
    <?php if (isset($_SESSION['username'])){?>
    <p class='connexion'>Vous êtes connecté en tant que : <?php echo $_SESSION['username'] ?> </p><br><?php }?>
    <p class='slogan'>Vive la COGIP ! </p>
</footer>

</html>



