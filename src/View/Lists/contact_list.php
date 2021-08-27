<?php require __DIR__.'/../surround/header.php' ?>

    <div>
    <table id='contact_list'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
        </tr>
        <?php foreach ($_SESSION['contact_all'] as $contact) {
            ?>
            <tr>
                <td><?php echo $contact["firstname"] . ' ' . $contact["lastname"]?></td>
                <td><?php echo $contact["email"] ?></td>
                <td><?php echo $contact["name"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
