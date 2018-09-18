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
    header("location: login.php");
}
?>
  <script>
function validateForm() {
    var x = document.forms["myForm"]["userName"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>