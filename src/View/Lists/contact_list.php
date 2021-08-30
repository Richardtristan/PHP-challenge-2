<?php require __DIR__.'/../surround/header.php' ?>

    <div>
    <table id='contact_list'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
        </tr>
        <?php foreach ($contact as $data) {
            ?>
            <tr>
                <td><?php echo $data["firstname"] . ' ' . $data["lastname"]?></td>
                <td><?php echo $data["email"] ?></td>
                <td><?php echo $data["name"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
