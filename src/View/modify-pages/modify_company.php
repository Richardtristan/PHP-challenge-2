<?php require 'header.php' ?>

<div class='table'>
    <label for="companyInfo">Changing informations</label>
    <table id='companyInfo'>
        <tr>
            <th>Company</th>
            <td><!--Insert company--></td>
        </tr>
        <tr>
            <th>TVA</th>
            <td><!--Insert TVA number--></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><!--Insert company type--></td>
        </tr>
        <tr>
            <th>Country</th>
            <td><!--Insert country--></td>
        </tr>
    </table>
</div>
<div class='form'>
    <form action="" method="post">
        <label for="name">Modify name of the company</label>
        <input type="text" name="name" id="name">
        <label for="tva">Modify TVA number</label>
        <input type="text" name="tva" id="tva">
        <label for="type">Modify company type</label>
        <input type="text" name="type" id="type">
        <label for="contact">Modify country</label>
        <input type="text" name="country" id="country">
    </form>
</div>

<?php require 'footer.php' ?>