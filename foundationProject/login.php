<?php include_once "config.php" ?>
<!doctype html>

<html lang="en">
<head>
    <?php include_once "template/head.php" ?>

</head>


<body>
<?php include_once "template/header.php" ?>
<?php include_once "template/navigation.php" ?>



<form class="callout text-center" action="autorize.php" method="post">
    <h2>Prijavi se</h2>
    <div class="floated-label-wrapper">
        <label for="userName">Full name</label>
        <input type="text" id="userName" name="userName" placeholder="Full name">
    </div>

    <div class="floated-label-wrapper">
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" placeholder="Password">
    </div>
    <input class="button expanded" type="submit" value="Sign up">
</form>




<?php include_once "template/footer.php" ?>
<?php include_once "template/scripts.php" ?>
</body>
</html>

