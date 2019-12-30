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
<div class="container">
    <figure>
        <img src="images/Ciorbadeburta.jpg">
        <figcaption><b><h2>Ciorba de burta</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Ciorbadecurcan.jpg">
        <figcaption><b><h2>Ciorba de curcan</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Ciorbadeperisoare.jpg">
        <figcaption><b><h2>Ciorba de perisoare</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Ciorbadevacuta.jpg">
        <figcaption><b><h2>Ciorba de vacuta</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Supacremaderosii.jpg">
        <figcaption><b><h2>Supa crema de rosii</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Supacremalegume.jpg">
        <figcaption><b><h2>Supa crema de legume</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/Supadepui.jpg">
        <figcaption><b><h2>Supa de pui</h2></b></figcaption>
    </figure>
</div>
<br>
<h1>Bauturi</h1>
<div class="container">
    <figure>
        <img src="images/apa.jpg">
        <figcaption><b><h2>Apa</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/cafea.jpg">
        <figcaption><b><h2>Cafea</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/freshportocale.jpg">
        <figcaption><b><h2>Fresh de portocale</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/greenapple.jpeg">
        <figcaption><b><h2>Green Apple</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/limonada.jpg">
        <figcaption><b><h2>Limonada</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/pinacolada.jpg">
        <figcaption><b><h2>Pina Colada</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/sucuri.jpg">
        <figcaption><b><h2>Sucuri</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/vin.jpg">
    <figcaption><b><h2>Vin</h2></b></figcaption>
    </figure>
</div>
<br>
<h1>Desert</h1>
<div class="container">
    <figure>
        <img src="images/clatitecuciocolata.jpg">
        <figcaption><b><h2>Clatite cu ciocolata</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/inghetata.jpg">
        <figcaption><b><h2>Inghetata</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/papanasi.jpg">
        <figcaption><b><h2>Papanasi</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/tiramisu.jpg">
        <figcaption><b><h2>Tiramisu</h2></b></figcaption>
    </figure>
</div>
<br>
<h1>Garnituri</h1>
<div class="container">
    <figure>
        <img src="images/cartoficopti.jpg">
        <figcaption><b><h2>Cartofi copti</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/cartofiprajiti.jpg">
        <figcaption><b><h2>Cartofi prajiti</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/legumelagratar.jpg">
        <figcaption><b><h2>Legume la gratar</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/orez.jpg">
        <figcaption><b><h2>Orez</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/piure.jpg">
        <figcaption><b><h2>Piure de cartofi</h2></b></figcaption>
    </figure>
</div>
<br>
<h1>Fel Principal</h1>
<div class="container">
    <figure>
        <img src="images/coastelagratar.jpg">
        <figcaption><b><h2>Coaste la gratar</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/pulpedepui.jpg">
        <figcaption><b><h2>Pulpe de pui</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/sarmale.jpg">
        <figcaption><b><h2>Sarmale</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/snitel.jpg">
        <figcaption><b><h2>Snitel de pui</h2></b></figcaption>
    </figure>
    <figure>
        <img src="images/tocanadeporc.jpg">
        <figcaption><b><h2>Tocana de porc</h2></b></figcaption>
    </figure>
</div>
</body>
</html>
