<?php
include_once "../../config.php";

$query = $conn->prepare("delete from appuser where id=:id;");
$query->execute($_GET);
header("location: index.php");

?>