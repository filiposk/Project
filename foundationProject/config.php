<?php
session_start();
include_once "function.php";
$titleAPP="Računanje Kalorija";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $pathAPP="/foundationProject/";
        break;
    case "filip95.byethost24.com":
    $pathAPP="/foundationProject/";
       break;
}
$conn = new PDO("mysql:host=localhost;dbname=base1", "filip", "filip");
$conn->exec("set names utf8");

