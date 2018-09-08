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
$query =  $conn->prepare("select a.Id,a.UserName, a.NickName, count(b.id) as recepata,count(c.Id) as namirnica from appuser a left join recipe b on a.Id=b.UserId 
left join ingredient c on a.Id=c.UserId
group by a.Id,a.UserName, a.NickName ;");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);
?>

<div class="grid-container">
    <h3>Korisnik</h3><hr>
    <a href="new.php" class="button"><i class="fas fa-2x fa-plus-square"></i></a>
    <div class="grid-x grid-margin-x">
        <table class="unstriped">
            <thead>
            <tr style="color:#000000;">
                <th>Korisničko ime</th>
                <th>Nadimak</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach($result as $row): ?>
                <tr>
                    <td><?php echo $row->UserName; ?></td>
                    <td><?php echo $row->NickName; ?></td>
                    <td>
                    <?php
                    if($row->recepata==0 && $row->namirnica==0): 
                    ?>
                        <a onclick="return confirm('Jeste li sigurni brisati= -><?php echo $row->UserName; ?>?')" href="delete.php?id=<?php echo $row->Id; ?>">
                            <i class="fas fa-2x fa-trash-alt"></i>
                        </a>
                        <?php 
                        endif;
                        ?>
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