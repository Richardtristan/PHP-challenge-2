<?php require __DIR__.'/../surround/header.php' ?>

<<<<<<< HEAD
    <div>
        <label for="userInfo">Changing informations</label>
        <table id='userInfo'>
            <tr>
                <th>Username</th>
                <th>email</th>
                <th>Access right</th>
            </tr>
            <?php foreach ($users as $data) {
                ?>

                    <td><?php echo $data["username"] ?></td>
                    <td><?php echo $data["email"] ?></td>
                    <td><?php echo $data["grade"] ?></td>
                    <td><a href="/delete_user/id/<?php echo $data['id']?>"><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/delete.png?raw=true" alt="delete" width="20px"></a></td>
                    <td><a href="/update_user/id/<?php echo $data['id']?>"><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/pen.png?raw=true" alt="modify" width="20px"></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
=======
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
>>>>>>> Eli

<?php require __DIR__.'/../surround/footer.php' ?>