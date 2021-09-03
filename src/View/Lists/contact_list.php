<?php require __DIR__.'/../surround/header.php';
?>

<div class='block'>
    <div  class='tables'>
    <label for="contactList" class='Hhome'>List of contacts :</label>
        <table id='contactList'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
        </table>
    </div>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
