<?php require __DIR__.'/../surround/header.php' ?>
<div class='block'>
    <div  class='tables'>
        
    <label for="companiesList" class='Hhome'>List of companies :</label>
        <table id='companiesList'>
        <thead>
            <tr>
                <th>Name</th>
                <th>VAT</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
        </table>
    </div>
</div>
<?php require __DIR__.'/../surround/footer.php' ?>
