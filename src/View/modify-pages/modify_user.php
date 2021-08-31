<?php  require __DIR__.'/../surround/header.php' ?>

    <div class='form'>
    <form action="" method="post">
        <label for="name">Modify username</label>
        <input type="text" name="update_user" value="<?php echo $users['username'] ?>" id="update_user">
        <label for="tva">Modify Password</label>
        <input type="text" name="update_pass"  id="update_pass">
        <label for="type">Modify email</label>
        <input type="text" name="update_email" value="<?php echo $users['email'] ?>" id="update_email">
        <label for="contact">Modify grade</label>
        <input type="text" name="update_grade" value="<?php echo $users['grade'] ?>" id="update_grade">
        <input type="submit" name="update_submit">
    </form>
</div>

<?php require __DIR__.'/../surround/footer.php' ?>
