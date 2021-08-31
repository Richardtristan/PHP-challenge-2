<?php require __DIR__.'/../surround/header.php' ?>
<div>
    <label for="companies">List of clients companies :</label>
    <table id='compagnies'>
        <tr>
            <th>Name</th>
            <th>VAT</th>
            <th>Country</th>
        </tr>
        <?php foreach ($clients as $data) {
            ?>
            <tr>
                <td><?php echo $data["name"] ?></td>
                <td><?php echo $data["VAT_number"] ?></td>
                <td><?php echo $data["country"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
