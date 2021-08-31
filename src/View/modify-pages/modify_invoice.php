<?php require 'header.php' ?>

<div class='table'>
    <label for="UserInfos">Changing user</label>
    <table id='UserInfos'>
        <tr>
            <th>username</th>
            <td><!--Insert company--></td>
        </tr>
        <tr>
            <th>email</th>
            <td><!--Insert TVA number--></td>
        </tr>
        <tr>
            <th>password</th>
            <td><!--Insert invoice number--></td>
        </tr>
        <tr>
            <th>grade</th>
            <td><!--Insert invoice number--></td>
        </tr>
    </table>
</div>
<div class='form'>
    <form action="" method="post">
        <label for="name">Modify name of the company</label>
        <input type="text" name="name" id="name">
        <label for="tva">Modify date</label>
        <input type="date" name="date" id="date">
        <label for="invoice">Modify invoice number</label>
        <input type="text" name="invoice" id="invoice">
    </form>
</div>

<?php require 'footer.php' ?>