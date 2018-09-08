<?php include_once "../../config.php" ?>
<?php
if(!isset($_SESSION["o"])){
    header('location:'.$pathAPP.'logout.php');
}
?>
<!doctype html>

<html lang="en">
<head>
    <?php include_once "../../template/head.php" ?>

</head>

<body>
<?php include_once "../../template/header.php" ?>
<?php include_once "../../template/navigation.php" ?>

<?php
$query =  $conn->prepare("
select a.Id, a.Name, a.Description, a.Picture, count(b.IngredientId) as namirnica from recipe a left join ingredient_recipe b on a.Id=b.RecipeId 
group by a.Id, a.Name, a.Description, a.Picture;");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);
?>

<div class="grid-container">
    <h3>Recept</h3><hr>
    <a href="new.php" class="button"><i class="fas fa-2x fa-plus-square"></i></a>
    <div class="grid-x grid-margin-x">
        <table class="unstriped">
            <thead>
            <tr style="color:#000000;">
                <th>Naziv</th>
                <th>Opis</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach($result as $row): ?>
                <tr>
                    <td><?php echo $row->Name; ?></td>
                    <td><?php echo $row->Description; ?></td>
                    <?php
                    if($row->namirnica==0)
                    ?>
                    <td>
                        <a onclick="return confirm('Jeste li sigurni brisati= -><?php echo $row->Name; ?>?')" href="delete.php?id=<?php echo $row->Id; ?>">
                            <i class="fas fa-2x fa-trash-alt"></i>
                        </a>
                    <?php endif; ?>
                        <a href="rewrite.php?Id=<?php echo $row->Id; ?>"><i class="fas fa-2x fa-edit"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once "../../template/scripts.php" ?>
<?php include_once "../../template/footer.php" ?>

</body>
</html>