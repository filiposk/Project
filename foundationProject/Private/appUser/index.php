<?php include_once "../config.php" ?>
<!doctype html>

<html lang="en">
<head>
    <?php include_once "../template/head.php" ?>

</head>

<body>
<?php include_once "../template/header.php" ?>
<?php include_once "../template/navigation.php" ?>

<?php
$query =  $conn->prepare("select * from appsuer a;");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);
?>

<div class="grid-container">
    <h3>Clean levels</h3><hr>
    <a href="new.php" class="button">Create new</a>
    <div class="grid-x grid-margin-x">
        <table>
            <thead>
            <tr style="color:#afba2f;">
                <th>Level name</th>
                <th>Price coefficient</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($result as $row): ?>
                <tr>
                    <td><?php echo $row->UserName; ?></td>
                    <td><?php echo $row->NickName; ?></td>
                    <td>
                        <a onclick="return confirm('Delete -><?php echo $row->UserName; ?>?')" href="delete.php?id=<?php echo $row->id; ?>">
                            <i class="fas fa-2x fa-trash-alt"></i>
                        </a>
                        <a href="rewrite.php?id=<?php echo $row->id; ?>"><i class="fas fa-2x fa-edit"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once "../template/scripts.php" ?>
<?php include_once "../template/footer.php" ?>

</body>
</html>