<?php require __DIR__.'/../surround/header.php' ?>

    <div>
    <table id='contact_list'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
        </tr>
        <?php foreach ($contacts as $contact) {
            ?>
            <tr>
                <td><a href="/contact_details/id/<?php echo $contact['id']?>"><?php echo $contact["firstname"] . ' ' . $contact["lastname"]?></a></td>
                <td><?php echo $contact["email"] ?></td>
                <td><?php echo $contact["name"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
