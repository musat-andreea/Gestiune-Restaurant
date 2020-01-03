<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Categorii
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="stylemeniu.css">
</head>
<body background="images/fundal01.jpg">
<h1>Supe/Ciorbe</h1>
<form method = "post">
<div class="container">
    <figure>
        <img src="images/Ciorbadeburta.jpg">
        <figcaption><b><h2>Ciorba de burta ~ 12lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Ciorbadecurcan.jpg">
        <figcaption><b><h2>Ciorba de curcan ~ 11lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Ciorbadeperisoare.jpg">
        <figcaption><b><h2>Ciorba de perisoare ~11lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Ciorbadevacuta.jpg">
        <figcaption><b><h2>Ciorba de vacuta ~11lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Supacremaderosii.jpg">
        <figcaption><b><h2>Supa crema de rosii ~10lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Supacremalegume.jpg">
        <figcaption><b><h2>Supa crema de legume ~10lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Supadepui.jpg">
        <figcaption><b><h2>Supa de pui ~ 10lei</h2></b></figcaption>
    </figure>
</div>

<br>
<h1>Bauturi</h1>
<div class="container">
    <figure>
        <img src="images/apa.jpg">
        <figcaption><b><h2>Apa ~ 5lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/cafea.jpg">
        <figcaption><b><h2>Cafea ~ 6lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/freshportocale.jpg">
        <figcaption><b><h2>Fresh de portocale ~ 10lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/greenapple.jpeg">
        <figcaption><b><h2>Green Apple ~ 16lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/limonada.jpg">
        <figcaption><b><h2>Limonada ~ 12lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/pinacolada.jpg">
        <figcaption><b><h2>Pina Colada ~ 16lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/sucuri.jpg">
        <figcaption><b><h2>Sucuri ~ 7lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/vin.jpg">
    <figcaption><b><h2>Vin ~ 16lei</h2></b></figcaption>
    </figure>
</div>
<br>
<h1>Desert</h1>
<div class="container">
    <figure>
        <img src="images/clatitecuciocolata.jpg">
        <figcaption><b><h2>Clatite cu ciocolata ~ 16lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/inghetata.jpg">
        <figcaption><b><h2>Inghetata ~ 8lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/papanasi.jpg">
        <figcaption><b><h2>Papanasi ~ 14lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/tiramisu.jpg">
        <figcaption><b><h2>Tiramisu ~ 12lei</h2></b></figcaption>
    </figure>
</div>
<br>
<h1>Garnituri</h1>
<div class="container">
    <figure>
        <img src="images/cartoficopti.jpg">
        <figcaption><b><h2>Cartofi copti ~ 9lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/cartofiprajiti.jpg">
        <figcaption><b><h2>Cartofi prajiti ~ 8lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/legumelagratar.jpg">
        <figcaption><b><h2>Legume la gratar ~ 14lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/orez.jpg">
        <figcaption><b><h2>Orez ~ 9lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/piure.jpg">
        <figcaption><b><h2>Piure de cartofi ~ 9lei</h2></b></figcaption>
    </figure>
</div>
<br>
<h1>Fel Principal</h1>
<div class="container">

    <figure>
        <img src="images/coastelagratar.jpg">
        <figcaption><b><h2>Coaste la gratar ~ 32lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/pulpedepui.jpg">
        <figcaption><b><h2>Pulpe de pui ~ 18lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/sarmale.jpg">
        <figcaption><b><h2>Sarmale ~ 20lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/snitel.jpg">
        <figcaption><b><h2>Snitel de pui ~ 16lei</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/tocanadeporc.jpg">
        <figcaption><b><h2>Tocana de porc ~ 23lei</h2></b></figcaption>
    </figure>
</div>

</form>
</body>
</html>
