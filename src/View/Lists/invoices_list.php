<?php require __DIR__.'/../surround/header.php' ?>
<div>
    <table id='invoice_list'>
        <tr>
            <th>Invoice number</th>
            <th>Dates</th>
            <th>Companies</th>
            <th>Type</th>
        </tr>
        <?php foreach ($_SESSION['invoices_all'] as $invoice) {
        ?>
        <tr>
            <td><?php echo $invoice["number"] ?></td>
            <td><?php echo $invoice["date"] ?></td>
            <td><?php echo $invoice["name"] ?></td>
            <td><?php echo $invoice["type"] ?></td>
        </tr>
        <?php
            }
            ?>
    </table>
</div>
<?php require __DIR__.'./../surround/footer.php' ?>