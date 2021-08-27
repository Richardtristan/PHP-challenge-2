<?php
?>

<footer class="footer">
    <div class="content has-text-centered">
        <?php if (isset($_SESSION['username'])){?>
        <p class='connexion'>Vous êtes connecté en tant que : <?php echo $_SESSION['username'] ?> </p><br><?php }?>
        <p class='slogan'>Vive la COGIP ! </p>
    </div>
</footer>
</html>