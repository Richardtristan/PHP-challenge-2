<?php  require __DIR__.'/../surround/header.php' ?>


    <div class='form'>
    <form action="" method="POST">
        <label for="name" class='labelModif'>Modify name of the company</label>
        <input type="text" name="name" id="name" value="<?php echo $company['name'] ?>">
        <label for="vat" class='labelModif'>Modify VAT number</label>
        <input type="text" name="vat" id="vat" value="<?php echo $company['VAT_number'] ?>">
        <label for="type" class='labelModif'>Modify company type</label>
        <select name="type" id="type">
            <?php foreach ($types as $data) {
                ?>
                <option value='<?php echo $data['id']?>' <?php echo $data['id'] === $company["type_id"] ? "selected" : "" ?>><?php echo $data["name"] ?></option>
                <?php
            }
            ?>
        </select>
        <label for="country" class='labelModif'>Modify country</label>
        <input type="text" name="country" id="country" value="<?php echo $company['country'] ?>">
        <input type="submit" name="update_submit" class='log'>
    </form>
</div>

<?php require __DIR__.'/../surround/footer.php' ?>
