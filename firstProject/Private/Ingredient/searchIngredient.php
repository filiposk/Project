<?php
include_once "../../config.php" ;
if(!isset($_SESSION["o"])){
    header("location: " . $pathAPP . "logout.php");
}

if(!isset($_GET["id"])){
    header("location: " . $pathAPP . "logout.php");
}

$query = $conn->prepare("
 
select Name , Calories from Ingredient
");
$izraz->execute(array(
    "requirement" => "%" . $_GET["term"] . "%",
    "grupa" => $_GET["sifraGrupe"]
));
$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
foreach($rezultati as $red){
    if(file_exists("../../img/polaznici/" . $red->sifra . ".png")){
        $red->slika = $putanjaAPP . "img/polaznici/" . $red->sifra . ".png";
    }else{
        $red->slika = $putanjaAPP . "img/nepoznato.png";
    }
}