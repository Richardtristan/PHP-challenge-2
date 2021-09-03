<?php require __DIR__.'/../surround/header.php' ?>

<body>
<div class='block'>
<h1>Delete??</h1>
<form method="post">
    <p>Choose Yes or No :</p>
    <div>
        <input type="radio" id="oui"
               name="oui" value="oui">
        <label for="oui">Yes</label>
        <input type="radio" id="non"
               name="non" value="non">
        <label for="contactChoice3">NO</label>
    </div>
    <div>
        <button type="submit">Send</button>
    </div>
</form>
</div>
</body>
<?php require __DIR__.'/../surround/footer.php' ?>
