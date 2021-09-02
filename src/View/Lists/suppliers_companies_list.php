<?php require __DIR__.'/../surround/header.php' ?>
<div class='block'>
    <label for="companies">List of suppliers companies :</label>
    <table id='compagnies'>
        <thead>
            <tr>
                <th>Name</th>
                <th>VAT</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($providers as $data) {
                ?>
                <tr>
                    <td><a href="/companies_detail/id/<?php echo $data['id_company']?>"><?php echo $data["name"] ?></a></td>
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
