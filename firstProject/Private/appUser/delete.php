<?php
include_once "../../config.php" ;
if(!isset($_SESSION["o"])){
    header("location: " . $pathAPP . "logout.php");
}

if(!isset($_GET["id"])){
    header("location: " . $pathAPP . "logout.php");
}




$query = $conn->prepare("delete from AppUser where id=:id");
$query->execute($_GET);
header("location: index.php");