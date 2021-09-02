<?php require __DIR__.'/../surround/header.php' ?>
<div class='block'>
    <label for="companies">List of clients companies :</label>
    <table id='compagnies'>
        <tr>
            <th>Name</th>
            <th>VAT</th>
            <th>Country</th>
        </tr>
        <?php foreach ($company as $data) {
            ?>
            <tr>
                <td><a href="/companies_detail/id/<?php echo $data['id_company']?>"><?php echo $data["name"] ?></a></td>
                <td><?php echo $data["VAT_number"] ?></td>
                <td><?php echo $data["country"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>