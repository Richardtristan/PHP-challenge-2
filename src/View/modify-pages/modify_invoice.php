<?php  require __DIR__.'/../surround/header.php' ?>

    <div class='form'>
    <form action="" method="post">
        <label for="name">Modify name of the company</label>
        <select name="company" id="company">
            <?php foreach ($companies as $data) {
                ?>
                <option value='<?php echo $data['id_company']?>' <?php echo $data['id_company'] === $poeple["company_id"] ? "selected" : "" ?>><?php echo $data["name"] ?></option>
                <?php
            }
            ?>
        </select>
        <label for="name">Modify name of the contact</label>
        <select name="contact" id="contact">
          <?php foreach ($contacts as $data)
          {
            ?>
            <option value='<?php echo $data['id']?>'><?php echo $data["lastname"] . " " . $data["firstname"] ?></option>
            <?php
          }
          ?>
        </select>
        <label for="tva">Modify date</label>
        <input type="date" name="date" id="date" value"<?php echo $invoice['date']?>">
        <input type="submit" name="update_submit">
    </form>
</div>

<?php require __DIR__.'/../surround/footer.php' ?>
