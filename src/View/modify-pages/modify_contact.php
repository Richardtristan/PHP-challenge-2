<?php  require __DIR__.'/../surround/header.php' ?>

<div class='form'>
    <form action="" method="post">
        <label for="name">Modify the firstname of the contact</label>
        <input type="text" name="Update_contact_firstname" value="<?php echo $poeple['firstname'] ?>" id="firstname">
        <label for="name">Modify the lastname of the contact</label>
        <input type="text" name="Update_contact_lastname" value="<?php echo $poeple['lastname'] ?>" id="lastname">
        <label for="type">Modify the ID company</label>
        <select name="update_company_id" id="company">
            <?php foreach ($companies as $data) {
                ?>
                <option value='<?php echo $data['id_company']?>'><?php echo $data["name"] ?></option>
                <?php
            }
            ?>
        </select>
        <label for="email">Modify e-mail</label>
        <input type="email" name="Update_contact_email" value="<?php echo $poeple['email'] ?>" id="email">
        <input type="submit" name="update_submit">
    </form>
</div>

<?php require __DIR__.'/../surround/footer.php' ?>
