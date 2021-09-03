<?php  require __DIR__.'/../surround/header.php' ?>

    <div class='form'>
    <form action="" method="post" class='deleteForm'>
        <label for="username" class='labelModif'>Modify username</label>
        <input type="text" name="update_user" id="username" class='username' value="<?php echo $users['username'] ?>">
        <label for="mdp" class='labelModif'>Modify Password</label>
        <input type="text" name="update_pass" id="mdp" class='mdp'>
        <label for="type" class='labelModif'>Modify email</label>
        <input type="text" name="update_email" value="<?php echo $users['email'] ?>" id="update_email">
        <label for="contact" class='labelModif'>Modify grade</label>
        <input type="text" name="update_grade" value="<?php echo $users['grade'] ?>" id="update_grade">
        <input type="submit" name="update_submit" class='log'>
    </form>
</div>

<?php require __DIR__.'/../surround/footer.php' ?>
