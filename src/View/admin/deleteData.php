<?php require __DIR__.'/../surround/header.php' ?>

<body>
<div class='block'>
<h1 class='Hhome'>Delete??</h1>
<form method="post" class='deleteForm'>
    <p class='Hhome'>Choose Yes or No :</p>
    <div>
        <label class="rad-label">
            <input type="radio" class="rad-input" name="rad">
            <div class="rad-design"></div>
            <div class="rad-text">Yes</div>
        </label>
        <label class="rad-label">
            <input type="radio" class="rad-input" name="rad">
            <div class="rad-design"></div>
            <div class="rad-text">NO</div>
        </label>
    </div>
    <div>
        <button type="submit" class='log'>Send</button>
    </div>
</form>
</div>
</body>
<?php require __DIR__.'/../surround/footer.php' ?>

<!-- <div>
        <input type="radio" id="oui"
               name="oui" value="oui">
        <label for="oui">Yes</label>
        <input type="radio" id="non"
               name="non" value="non">
        <label for="contactChoice3">NO</label>
    </div>
    <div>
        <button type="submit" class='log'>Send</button>
    </div> -->