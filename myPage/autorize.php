<?php
if(!isset($_POST["username"])){
    print_r($_POST);
exit;
}

    if($_POST["username"]===""){
        header("location: login.php");
        exit;
    }

    if(($_POST["username"]==="filip" && $_POST["password"]==="f")
    ||
    ($_POST["username"]==="pavlovic" && $_POST["password"]==="p")
    ){
        //pusti dalje
      session_start();
        $_SESSION["o"]= $_POST["username"];
        header("location: private/controlboard.php");
    }else{
        header("location: login.php");
    }
