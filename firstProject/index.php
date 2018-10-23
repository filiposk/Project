<?php include_once "config.php" ?>
<?php include_once "template/scripts.php" ?>
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



<div class="input-group searchbar">
    <div class="input-group-button">
        <button class="button search" ">
        <i class="fas fa-search"></i>
        </button>
    </div>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <input autocomplete="off" class="input-field search-field" type="search" name="requirement" value="<?php echo $requirement?>" placeholder="Namirnica" />
    </form>
    <div></div>
</div>
<?php if (isset($_GET["requirement"])): ?>
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
<?php endif; ?>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--<script>-->
<!--    $("#requirement").autocomplete({-->
<!--        source:"private/ingredient/searchIngredient.php",-->
<!--        minLength: 2,-->
<!--        focus:-->
<!--            function(event,ui){-->
<!--                event.preventDefault();-->
<!--                debugger;-->
<!--            },-->
<!--        select:-->
<!--            function(event,ui){-->
<!--                event.preventDefault();-->
<!--                debugger;-->
<!--            }-->
<!--    })-->
<!--        .data("ui-autocomplete")._renderItem=function(ul,namirnica) {-->
<!--        return $("<li> <span>" + namirnica.name + "</span> </li>");-->
<!--    }-->
<!---->
<!--</script>-->
</html>