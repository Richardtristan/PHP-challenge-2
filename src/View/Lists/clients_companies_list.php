<?php require __DIR__.'/../surround/header.php' ?>
<div>
    <label for="companies">List of clients companies :</label>
    <table id='compagnies'>
        <thead>
            <tr>
                <th>Name</th>
                <th>VAT</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $data) {
                ?>
                <tr>
<<<<<<< HEAD
                    <td><a href="/companies_detail/id/<?php echo $data['id_company']?>"><?php echo $data["name"] ?></a></td>
=======
                    <td><?php echo $data["name"] ?></td>
>>>>>>> Eli
                    <td><?php echo $data["VAT_number"] ?></td>
                    <td><?php echo $data["country"] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>