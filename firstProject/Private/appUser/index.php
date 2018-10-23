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
<?php include_once "../../template/navigation.php" ?>

<?php
//klasa koja predstavlja podatke iz baze

class appuserViewModel {
    public $Id;
    public $UserName;
    public $NickName;
    public $Password;
    public $namirnice;
}

$query =  $conn->prepare("
select distinct  
	a.Id,
    a.UserName,
    a.NickName,
    a.Password,
    (select COUNT(ingredient.UserId) from ingredient where a.Id = ingredient.UserId) as broj_namirnica
    from appuser a 
    left join ingredient b on a.Id = b.UserId;");
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
                <th>Ime</th>
                <th>Nadimak</th>
                <th>Broj namirnica</th>


            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $row): ?>
                <tr>
                    <td><?php echo $row->UserName; ?></td>
                    <td><?php echo $row->NickName; ?></td>
                    <td><?php echo $row->broj_namirnica; ?></td>

                    <td>
                        <a href="rewrite.php?Id=<?php echo $row->Id; ?>"><i class="fas fa-2x fa-edit"></i></a>
                        <?php if ($row->broj_namirnica < 1): ?>
                            <a onclick="return confirm('Jeste li sigurni brisati= -><?php echo $row->UserName; ?>?')"
                               href="delete.php?Id=<?php echo $row->Id; ?>">
                                <i class="fas fa-2x fa-trash-alt"></i>
                            </a>
                        <?php endif; ?>
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

ftg