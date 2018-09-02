<?php
session_start();
include_once "function.php";
$titleAPP="Računanje Kalorija";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $pathAPP="/firstProject/";
        $conn = new PDO("mysql:host=localhost;dbname=Base1", "filip", "filip");
        $conn->exec("set names utf8");
        break;
    case "filip123.byethost3.com":
    $pathAPP="/firstProject/";
        $conn = new PDO("mysql:host=sql301.byethost.com;dbname=b3_22593627_Base1", "b3_22593627", "Filip123!");
        $conn->exec("set names utf8");

       break;
}


