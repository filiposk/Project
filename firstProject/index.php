<?php include_once "config.php" ?>
<!doctype html>

<html lang="en">
<head>
<?php include_once "template/head.php" ?>

</head>

<body>

<?php include_once "template/navigation.php" ?>

<div class="input-group searchbar">
    <div class="input-group-button">
        <button class="button search">
            <i class="fas fa-search"></i>
        </button>
    </div>
    <input class="input-field search-field" type="search" placeholder="Pretraži namirnicu" />
</div>


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