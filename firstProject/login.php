<?php include_once "config.php" ?>
<!doctype html>

<html lang="en">
<head>
    <?php include_once "template/head.php" ?>
  
</head>


<body>
<?php include_once "template/header.php" ?>
<?php include_once "template/navigation.php" ?>



<form name="myForm" class="callout text-center"  class="small-4 cell" action="autorize.php" method="post">
    <h2>Prijavi se</h2>
    <div class="floated-label-wrapper">
        <label for="userName">Full name</label>
        <input type="text" id="userName" name="userName" placeholder="admin">
    </div>

    <div class="floated-label-wrapper">
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" placeholder="admin">
    </div>
    <input class="button expanded" type="submit" value="Sign up">
</form>




<?php include_once "template/footer.php" ?>
<?php include_once "template/scripts.php" ?>

<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
</body>


</html>

