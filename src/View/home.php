<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: /login');
}
require 'surround/header.php';

?>
    <h1>Welcome to the COGIP</h1>
    <p>Bonjour !</p>
    <div>
        <label for="invoice">Last invoice :</label>
        <table id='invoice'>
            <tr>
                <th>Invoice number</th>
                <th>Dates</th>
                <th>Company</th>
            </tr>
            <?php
            foreach ($invoice as $data) {
                ?>
                <tr>
                    <td><?php echo $data["number"] ?></td>
                    <td><?php echo $data["date"] ?></td>
                    <td><?php echo $data["name"] ?></td>
                    <td><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/delete.png?raw=true" alt="delete" width="20px"></td>
                    <td><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/pen.png?raw=true" alt="modify" width="20px"></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <label for="contact">Last Contact :</label>
        <table id='contact'>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Company</th>
            </tr>
            <?php
            foreach ($contact as $data) {
                ?>
                <tr>
                    <td><?php echo $data["firstname"] ?></td>
                    <td><?php echo $data["email"] ?></td>
                    <td><?php echo $data["name"] ?></td>
                    <td><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/delete.png?raw=true" alt="delete" width="20px"></td>
                    <td><a href="/update_contact/id/<?php echo $data['id']?>"><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/pen.png?raw=true" alt="modify" width="20px"></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <label for="companies">Last Companies :</label>
        <table id='companies'>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Company</th>
            </tr>
            <?php
            foreach ($company as $data) {
                ?>
                <tr>
                    <td><?php echo $data["name"] ?></td>
                    <td><?php echo $data["VAT_number"] ?></td>
                    <td><?php echo $data["type"] ?></td>
                    <td><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/delete.png?raw=true" alt="delete" width="20px"></td>
                    <td><input type="image" src="https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/pen.png?raw=true" alt="modify" width="20px"></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

<?php require 'surround/footer.php';
