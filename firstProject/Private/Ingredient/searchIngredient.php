<?php
include_once "../../config.php" ;

$requirement="";
if(isset($_GET["term"])){
    $requirement = $_GET["term"];
}
$query =  $conn->prepare(" select Name , Calories from Ingredient  where concat(Name,' ',Calories) like :requirement");
$query->bindValue("requirement", $requirement . "%");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);


if(!isset($_SESSION["o"])){
    header("location: " . $pathAPP . "logout.php");
}

if(!isset($_GET["id"])){
    header("location: " . $pathAPP . "logout.php");
}

$query = $conn->prepare("
 
select Name , Calories from Ingredient where Name like: requrement
");
$query->execute(array(
    "requirement" => "%" . $_GET["term"] . "%"

));
$result = $query->fetchAll(PDO::FETCH_OBJ);

echo json_encode($result);