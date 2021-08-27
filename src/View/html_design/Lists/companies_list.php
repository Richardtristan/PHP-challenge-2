<?php require 'header.php' ?>
<div>
    <label for="clients">Clients</label>
    <table id='clients'>
        <tr>
            <th>Name</th>
            <th>TVA</th>
            <th>Country</th>
        </tr>
        <tr>
            <td><!--Insert Name--></td>
            <td><!--Insert TVA--></td>
            <td><!--Insert Country--></td>
            <td><input type="image" src="delete.png" alt="delete" width="20px"></td>
        </tr>
    </table>
    <label for="suppliers">Suppliers</label>
    <table id='suppliers'>
        <tr>
            <th>Name</th>
            <th>TVA</th>
            <th>Country</th>
        </tr>
        <tr>
            <td><!--Insert Name--></td>
            <td><!--Insert TVA--></td>
            <td><!--Insert Country--></td>
            <td><input type="image" src="delete.png" alt="delete" width="20px"></td>
        </tr>
    </table>
</div>
<?php require 'footer.php' ?>