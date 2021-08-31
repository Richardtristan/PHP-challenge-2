<?php require __DIR__.'/../surround/header.php' ?>

<div>
    <label for="userInfo">Changing informations</label>
    <table id='userInfo'>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Access right</th>
        </tr>
        <?php foreach ($clients as $data) {
            ?>
            <tr>
                <td><?php echo $data["name"] ?></td>
                <td><?php echo $data["VAT_number"] ?></td>
                <td><?php echo $data["country"] ?></td>
                <td><input type="image" src="delete.png" alt="delete" width="20px"></td>
                <td><input type="image" src="pen.png" alt="modify" width="20px"></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

<?php require __DIR__.'/../surround/footer.php' ?>