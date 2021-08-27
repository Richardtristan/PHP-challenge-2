<?php require __DIR__.'/../surround/header.php' ?>
<div>
    <label for="companies">List of companies :</label>
    <table id='compagnies'>
        <tr>
            <th>Name</th>
            <th>VAT</th>
            <th>Country</th>
        </tr>
        <?php foreach ($_SESSION['companies_all'] as $companie) {
            ?>
            <tr>
                <td><a href="/companies_detail/id/<?php echo $companie['id_company']?>"><?php echo $companie["name"] ?></a></td>
                <td><?php echo $companie["VAT_number"] ?></td>
                <td><?php echo $companie["country"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>