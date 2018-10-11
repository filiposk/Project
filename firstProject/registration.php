<?php include_once "config.php" ?>
<!doctype html>

<html lang="en">
<head>
    <?php include_once "template/head.php" ?>
</head>


<body>

<?php include_once "template/navigation.php" ?>

<form class="callout text-center ">
    <h2>Registracija</h2>
    <div class="floated-label-wrapper">
        <label for="full-name">Full name</label>
        <input type="text" id="full-name" name="full name input" placeholder="Korisničko ime">
    </div>
    <div class="floated-label-wrapper">
        <label for="pass">Password</label>
        <input type="password" id="pass" name="password input" placeholder="Lozinka">
    </div>
    <div class="floated-label-wrapper">
        <label for="pass">Password</label>
        <input type="password" id="pass" name="password input" placeholder="Ponovi lozinku">
    </div>
    <div class="floated-label-wrapper">
        <label for="pass">Password</label>
        <input type="password" id="pass" name="password input" placeholder="Email">
    </div>
    <div class="floated-label-wrapper">
        <label for="pass">Password</label>
        <input type="password" id="pass" name="password input" placeholder="Nadimak">
    </div>

    <input class="button expanded" type="submit" value="Registriraj se">

</form>

<?php include_once "template/footer.php" ?>
<?php include_once "template/scripts.php" ?>
</body>
</html>
