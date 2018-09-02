<?php include_once "config.php" ?>
<!doctype html>

<html lang="en">
<head>
    <?php include_once "template/head.php" ?>

</head>

<body>
<?php include_once "template/header.php" ?>
<?php include_once "template/navigation.php" ?>



<div class="grid-container">
    <h3 style="text-align: center;">Mapa</h3>
    <div class="grid-x">
        <div id="googleMap" style="width:30%;height:400px;margin-left: auto;margin-right: auto;"></div>
        <script>
            //funcion for google maps
            function myMap() {
                var myCenter = new google.maps.LatLng(45.560455,18.680983);
                var mapCanvas = document.getElementById("googleMap");
                var mapOptions = {center: myCenter, zoom: 15};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({position:myCenter});
                marker.setMap(map);
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-DWB-Aox0-KJ0NrOdGvlcofE3c2DINUg&callback=myMap"></script>

    </div>
</div>

<a href="https://github.com/filiposk/Project/tree/master/firstProject"><i class="fab fa-2x fa-github"></i></a>
<a href="http://filip123.byethost3.com/?i=1"><i class="fas fa-2x fa-globe"></i></a>

<?php include_once "template/footer.php" ?>
<?php include_once "template/scripts.php" ?>
</body>
</html>

//