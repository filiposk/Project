<?php include_once "config.php" ?>
<!doctype html>

<html lang="en">
<head>
    <?php include_once "template/head.php" ?>

    <style>
        .floated-label-wrapper {
            position: relative;
        }

        .floated-label-wrapper label {
            background: #fefefe;
            color: #1779ba;
            font-size: 0.75rem;
            font-weight: 600;
            left: 0.75rem;
            opacity: 0;
            padding: 0 0.25rem;
            position: absolute;
            top: 2rem;
            transition: all 0.15s ease-in;
            z-index: -1;
        }

        .floated-label-wrapper label input[type=text],
        .floated-label-wrapper label input[type=email],
        .floated-label-wrapper label input[type=password] {
            border-radius: 4px;
            font-size: 1.75em;
            padding: 0.5em;
        }

        .floated-label-wrapper label.show {
            opacity: 1;
            top: -0.85rem;
            z-index: 1;
            transition: all 0.15s ease-in;
        }


    </style>

</head>


<body>
<?php include_once "template/header.php" ?>
<?php include_once "template/navigation.php" ?>

<form class="callout" action="autorize.php" method="post">
    <h2>Prijava</h2>
    <div class="floated-label-wrapper">
        <label for="userName">Full name</label>
        <input type="text" id="userName" name="userName" placeholder="Korisničko ime">
    </div>
    <div class="floated-label-wrapper">
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" placeholder="Lozinka">
    </div>
    <input class="button expanded" type="submit" name="submit" value="Prijava">


</form>

<?php include_once "template/footer.php" ?>
<?php include_once "template/scripts.php" ?>
</body>
</html>

