<?php
session_start();

require 'surround/header.php';

?>
<div class='block'>
    <h1 class='Hhome'>Welcome to the COGIP !</h1>
        <div class='tables'>
                <label for="invoice">Last invoice :</label>
                <table id='invoice'>
                <thead>
                    <tr>
                        <th>Invoice number</th>
                        <th>Dates</th>
                        <th>Company</th>
                        <?php if ($_SESSION['grade'] === 'Admin') {
                            echo "
                        <th>Delete</th>
                        <th>Update</th>";
                        } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($invoice as $data) {
                        ?>
                        <tr>
                            <td><?php echo $data["number"] ?></td>
                            <td><?php echo $data["date"] ?></td>
                            <td><?php echo $data["name"] ?></td>
                            <?php if ($_SESSION['grade'] === 'Admin') {
                                echo "
                            <td><a href='/delete_invoice/id/{$data['invoice_id']}'><input type='image' src='https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/delete.png?raw=true' alt='delete' width='20px'></td>
                            <td><a href='/update_invoice/id/{$data['invoice_id']}'><input type='image' src='https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/pen.png?raw=true' alt='modify' width='20px'></a></td>";
                            }
                            ?>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
                <label for="contact">Last Contact :</label>
                <table id='contact'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Company</th>
                        <?php if ($_SESSION['grade'] === 'Admin') {
                            echo "
                        <th>Delete</th>
                        <th>Update</th>";
                        } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contact as $data) {
                        ?>
                        <tr>
                            <td><?php echo $data["firstname"] ?></td>
                            <td><?php echo $data["email"] ?></td>
                            <td><?php echo $data["company_name"] ?></td>
                            <?php if ($_SESSION['grade'] === 'Admin') {
                                echo "
                            <td><a href='/delete_people/id/{$data['people_id']}'><input type='image' src='https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/delete.png?raw=true' alt='delete' width='20px'></td>
                            <td><a href='/update_people/id/{$data['people_id']}'><input type='image' src='https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/pen.png?raw=true' alt='modify' width='20px'></a></td>";
                            }
                            ?>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
                </table>
                <label for="companies">Last Companies :</label>
                <table id='companies'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Company</th>
                        <?php if ($_SESSION['grade'] === 'Admin') {
                            echo "
                        <th>Delete</th>
                        <th>Update</th>";
                        } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($company as $data) {
                        ?>
                        <tr>
                            <td><?php echo $data["name"] ?></td>
                            <td><?php echo $data["VAT_number"] ?></td>
                            <td><?php echo $data["type"] ?></td>
                            <?php if ($_SESSION['grade'] === 'Admin') {
                                echo "
                            <td><a href='/delete_company/id/{$data['company_id']}'><input type='image' src='https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/delete.png?raw=true' alt='delete' width='20px'></td>
                            <td><a href='/update_company/id/{$data['company_id']}'><input type='image' src='https://github.com/Richardtristan/PHP-challenge-2/blob/main/public/assets/img/pen.png?raw=true' alt='modify' width='20px'></a></td>";
                            }
                            ?>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
                </table>
        </div>
    </div>

<?php require 'surround/footer.php';
