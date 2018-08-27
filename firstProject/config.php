<?php
session_start();
include_once "function.php";
$titleAPP="Računanje Kalorija";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $pathAPP="/firstProject/";
        break;
    case "filip123.byethost3.com":
    $pathAPP="/firstProject/";
       break;
}
$conn = new PDO("mysql:host=localhost;dbname=Base1", "filip", "filip");
$conn->exec("set names utf8");

