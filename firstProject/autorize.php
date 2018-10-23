<?php
if(!isset($_POST["userName"])){
    exit;
}

if($_POST["userName"]===""){
    header("location: login.php");
    exit;
}

if(($_POST["userName"]==="admin" && $_POST["pass"]==="admin")
    
){
    //pusti dalje
    session_start();
    $_SESSION["o"]= $_POST["userName"];
    header("location: Private/controlBoard.php");
}else{
    header("location: index.php");
}
?>
