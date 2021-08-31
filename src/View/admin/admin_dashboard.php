<?php require __DIR__.'/../surround/header.php' ?>

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
                    <td><a ><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/delete.png?raw=true" alt="delete" width="20px"></a></td>
                    <td><a href="/update_user/id/<?php echo $data['id']?>"><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/pen.png?raw=true" alt="modify" width="20px"></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

<?php require __DIR__.'/../surround/footer.php' ?>