<?php include_once "config.php" ?>
<!doctype html>

<html lang="en">
<head>
    <?php include_once "template/head.php" ?>

</head>

<body>
<?php include_once "template/header.php" ?>
<?php include_once "template/navigation.php" ?>

<div id="map">
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-DWB-Aox0-KJ0NrOdGvlcofE3c2DINUg&callback=initMap"
        async defer></script>
</div>
<?php include_once "template/footer.php" ?>
<?php include_once "template/scripts.php" ?>
</body>
</html>