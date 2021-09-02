<?php
?>

<footer>
    <div class="ftr">
        <?php if (isset($_SESSION['username'])){?>
        <p class='connexion'>Vous êtes connecté en tant que : <br> <?php echo $_SESSION['username'] ?> </p><?php }?>
        <p class='slogan'>Vive la COGIP ! </p>
    </div>
</footer>
</html>