<?php require 'header.php' ?>

<div class='table'>
    <label for="companyInfo">Changing informations</label>
    <table id='companyInfo'>
        <tr>
            <th>Name</th>
            <td><!--Insert name--></td>
        </tr>
        <tr>
            <th>Company</th>
            <td><!--Insert company--></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><!--Insert email--></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><!--Insert phone--></td>
        </tr>
    </table>
</div>
<div class='form'>
    <form action="" method="post">
        <label for="name">Modify the name of the contact</label>
        <input type="text" name="name" id="name">
        <label for="type">Modify the company name</label>
        <input type="text" name="type" id="type">
        <label for="email">Modify e-mail</label>
        <input type="email" name="email" id="email">
        <label for="phone">Modify phone number</label>
        <input type="tel" name="phone" id="phone">
    </form>
</div>

<?php require 'footer.php' ?>