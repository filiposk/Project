<?php
session_start();
include_once "function.php";
$nameAPP="Računanje kalorija";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $pathAPP="/myPage/";
    $colorNavigation="style=\"background-color: blue;\"";
    break;
    case "filip95.byethost24.com":
    $pathAPP="/";
    $colorNavigation="";
    break;
}



