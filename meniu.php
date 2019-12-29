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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="stylemeniu.css">
</head>
<body background="fundal01.jpg">
    <h1>Supe/Ciorbe</h1>
    <div class="container">
        <img src="images/Ciorbadeburta.jpg">
        <img src="images/Ciorbadecurcan.jpg">
        <img src="images/Ciorbadeperisoare.jpg">
        <img src="images/Ciorbadevacuta.jpg">
        <img src="images/Supacremaderosii.jpg">
        <img src="images/Supacremalegume.jpg">
        <img src="images/Supadepui.jpg">
    </div>
    <br>
    <h1>Bauturi</h1>
    <div class="container">
        <img src="images/apa.jpg">
        <img src="images/cafea.jpg">
        <img src="images/freshportocale.jpg">
        <img src="images/greenapple.jpeg">
        <img src="images/limonada.jpg">
        <img src="images/pinacolada.jpg">
        <img src="images/sucuri.jpg">
        <img src="images/vin.jpg">
    </div>
    <br>
    <h1>Desert</h1>
    <div class="container">
        <img src="images/clatitecuciocolata.jpg">
        <img src="images/inghetata.jpg">
        <img src="images/papanasi.jpg">
        <img src="images/tiramisu.jpg">
    </div>
    <br>
    <h1>Garnituri</h1>
    <div class="container">
        <img src="images/cartoficopti.jpg">
        <img src="images/cartofiprajiti.jpg">
        <img src="images/legumelagratar.jpg">
        <img src="images/orez.jpg">
        <img src="images/piure.jpg">
    </div>
    <br>
    <h1>Fel Principal</h1>
    <div class="container">
        <img src="images/coastelagratar.jpg">
        <img src="images/pulpedepui.jpg">
        <img src="images/sarmale.jpg">
        <img src="images/snitel.jpg">
        <img src="images/tocanadeporc.jpg">
    </div>
</body>
</html>
