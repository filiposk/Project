<?php include_once "../../config.php" ?>
<!doctype html>

<html lang="en">
<head>
    <?php include_once "../../template/head.php" ?>

</head>

<body>
<?php include_once "../../template/navigation.php" ?>

<?php

$query =  $conn->prepare("select * from Ingredient ;");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);
?>

<div class="grid-container">
    <h3>Namirnice</h3><hr>
    <a href="new.php" class="button"><i class="fas fa-2x fa-plus-square"></i></a>
    <div class="grid-x grid-margin-x">
        <table class="unstriped">
            <thead>
            <tr style="color:#000000;">
                <th>Naziv</th>
                <th>Kalorije</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach($result as $row): ?>
                <tr>
                    <td><?php echo $row->Name; ?></td>
                    <td><?php echo $row->Calories; ?></td>
                    <td>
                        <a href="rewrite.php?Id=<?php echo $row->Id; ?>"><i class="fas fa-2x fa-edit"></i></a>
                        <a onclick="return confirm('Jeste li sigurni brisati= -><?php echo $row->Name; ?>?')" href="delete.php?Id=<?php echo $row->Id; ?>">
                            <i class="fas fa-2x fa-trash-alt"></i>
                        </a>

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