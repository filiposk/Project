<?php
if(!isset($_POST["userName"])){
    exit;
}

if($_POST["userName"]===""){
    header("location: login.php");
    exit;
}

if(($_POST["userName"]==="filip" && $_POST["pass"]==="f")
    ||
    ($_POST["userName"]==="edunova" && $_POST["pass"]==="e")
){
    //pusti dalje
    session_start();
    $_SESSION["o"]= $_POST["userName"];
    header("location: Private/controlBoard.php");
}else{
    header("location: login.php");
}