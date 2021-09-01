<?php  require __DIR__.'/../surround/header.php' ?>

    <div class='form'>
    <form action="" method="post">
        <label for="name">Modify name of the company</label>
        <input type="text" name="name" id="name">
        <label for="tva">Modify date</label>
        <input type="date" name="date" id="date">
        <label for="invoice">Modify invoice number</label>
        <input type="text" name="invoice" id="invoice">
        <input type="submit" name="update_submit">
    </form>
</div>

<?php require __DIR__.'/../surround/footer.php' ?>
