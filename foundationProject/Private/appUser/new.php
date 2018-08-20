<?php
include_once "../../config.php";
if(!isset($_SESSION["o"])){
    header('location:'.$pathAPP.'logout.php');
}
if(isset($_POST["add"])){
    $query = $conn->prepare("insert into appuser(UserName, NickName) values
                            (:UserName, :NickName)");
    unset($_POST["add"]);
    $query->execute($_POST);
    header("location: index.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <?php include_once "../../template/head.php"; ?>
</head>
<body>

<?php include_once "../../template/header.php"; ?>
<?php include_once "../../template/navigation.php"; ?><br>
<!-- Form for creating new  -->
<div class="grid-container">
    <div class="grid-x" style="justify-content:center;">
        <div class="cell medium-4 large-3">
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <h4 class="text-center">Novi korisnik</h4>
                <label>Korisničko ime
                    <input type="text"  name="UserName">
                </label>
                <label>Nadimak
                    <input type="text" name="NickName" >
                </label>
                <br>
                <button type="submit" name="add" class="button">
                    <i class="fas fa-2x fa-plus-square"></i>
                </button>
                <a href="index.php" class="alert button"><i class="fas fa-2x fa-ban"></i></a>
            </form>
        </div>
    </div>
</div>
<?php include_once "../../template/scripts.php"; ?>

<?php include_once "../../template/footer.php"; ?>

</body>
</html>
