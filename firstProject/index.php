<?php include_once "config.php" ?>
<!doctype html>

<html lang="en">
<head>
<?php include_once "template/head.php" ?>

</head>

<body>

<?php include_once "template/navigation.php" ?>
<?php
$requirement="";
if(isset($_GET["requirement"])){
    $requirement = $_GET["requirement"];
}
$query =  $conn->prepare(" select Name , Calories from Ingredient  where concat(Name,' ',Calories) like :requirement");
$query->bindValue("requirement", $requirement . "%");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);

?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <input type="text" name="requirement" value="<?php echo $requirement ?>">
    <input type="submit" value="Traži" class="button expanded"/>
</form>

<!--<div class="input-group searchbar">-->
<!--    <div class="input-group-button">-->
<!--        <button class="button search">-->
<!--            <i class="fas fa-search"></i>-->
<!--        </button>-->
<!--    </div>-->
<!--    <input class="input-field search-field" type="search" name="requirement" value="--><?php //echo $requirement?><!--" placeholder="Pretraži namirnicu" />-->
<!--    <div></div>-->
<!--    <input type="submit" value="Traži" class="button expanded"/>-->
<!--</div>-->
<table>
    <thead>
    <tr>

        <th>Ime</th>
        <th>Kalorije</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach($result as $row):?>
        <tr>

            <td><?php echo $row->Name; ?></td>
            <td><?php echo $row->Calories; ?></td>

        </tr>
    <?php endforeach;?>
    </tbody>
</table>


<?php include_once "template/scripts.php" ?>
<?php include_once "template/footer.php" ?>

</body>
<script>
    $(document).foundation();

    $(function() {
        $('.search')
            .bind('click', function(event) {
                $(".search-field").toggleClass("expand-search");

                // if the search field is expanded, focus on it
                if ($(".search-field").hasClass("expand-search")) {
                    $(".search-field").focus();
                }
            })
    });

</script>
</html>