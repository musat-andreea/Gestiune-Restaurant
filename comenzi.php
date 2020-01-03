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
    <title>Comanda Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="stylemeniu.css">
    <link rel="stylesheet" type="text/css" href="stylecomenzi.css">
</head>
<body background="images/fundalcomenzi3.jpg">
<h1>Supe/Ciorbe</h1>
<form method = "post">
    <div class="container">
        <figure>
            <img src="images/Ciorbadeburta.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "ciorba_burta">
                <input type = "number" name = "comanda" value = "ciorba_burta">
                <b><br>Ciorba de burta ~ 12lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/Ciorbadecurcan.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "ciorba_curcan">
                <input type = "number" name = "comanda" value = "ciorba_curcan">
                <b><br>Ciorba de curcan ~ 11lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/Ciorbadeperisoare.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "ciorba_perisoare">
                <input type = "number" name = "comanda" value = "ciorba_perisoare">
                <b><br>Ciorba de perisoare ~11lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/Ciorbadevacuta.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "ciorba_vacuta">
                <input type = "number" name = "comanda" value = "ciorba_vacuta">
                <b><br>Ciorba de vacuta ~11lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/Supacremaderosii.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "supa_rosii">
                <input type = "number" name = "comanda" value = "supa_rosii">
                <b><br>Supa crema de rosii ~10lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/Supacremalegume.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "supa_legume">
                <input type = "number" name = "comanda" value = "supa_legume">
                <b><br>Supa crema de legume ~10lei</br></figcaption>
        </figure>
        <figure>
            <img src="images/Supadepui.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "supa_pui">
                <input type = "number" name = "comanda" value = "supa_pui">
                <b><br>Supa de pui ~ 10lei</br></figcaption>
        </figure>
    </div>

    <br>
    <h1>Bauturi</h1>
    <div class="container">
        <figure>
            <img src="images/apa.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "apa">
                <input type = "number" name = "comanda" value = "apa">
                <b><br>Apa ~ 5lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/cafea.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "cafea">
                <input type = "number" name = "comanda" value = "cafea">
                <b><br>Cafea ~ 6lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/freshportocale.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "fresh_portocale">
                <input type = "number" name = "comanda" value = "fresh_portocale">
                <b><br>Fresh de portocale ~ 10lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/greenapple.jpeg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "green_apple">
                <input type = "number" name = "comanda" value = "green_apple">
                <b><br>Green Apple ~ 16lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/limonada.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "limonada">
                <input type = "number" name = "comanda" value = "limonada">
                <b><br>Limonada ~ 12lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/pinacolada.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "pina_colada">
                <input type = "number" name = "comanda" value = "pina_colada">
                <b><br>Pina Colada ~ 16lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/sucuri.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "sucuri">
                <input type = "number" name = "comanda" value = "sucuri">
                <b><br>Sucuri ~ 7lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/vin.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "vin">
                <input type = "number" name = "comanda" value = "vin">
                <b><br>Vin ~ 16lei</br></b></figcaption>
        </figure>
    </div>
    <br>
    <h1>Desert</h1>
    <div class="container">
        <figure>
            <img src="images/clatitecuciocolata.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "clatite_ciocolata">
                <input type = "number" name = "comanda" value = "clatite_ciocolata">
                <b><br>Clatite cu ciocolata ~ 16lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/inghetata.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "inghetata">
                <input type = "number" name = "comanda" value = "inghetata">
                <b><br>Inghetata ~ 8lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/papanasi.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "papanasi">
                <input type = "number" name = "comanda" value = "papanasi">
                <b><br>Papanasi ~ 14lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/tiramisu.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "tiramisu">
                <input type = "number" name = "comanda" value = "tiramisu">
                <b><br>Tiramisu ~ 12lei</br></b></figcaption>
        </figure>
    </div>
    <br>
    <h1>Garnituri</h1>
    <div class="container">
        <figure>
            <img src="images/cartoficopti.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "cartofi_copti">
                <input type = "number" name = "comanda" value = "cartofi_copti">
                <b><br>Cartofi copti ~ 9lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/cartofiprajiti.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "cartofi_prajiti">
                <input type = "number" name = "comanda" value = "cartofi_prajiti">
                <b><br>Cartofi prajiti ~ 8lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/legumelagratar.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "legume_gratar">
                <input type = "number" name = "comanda" value = "legume_gratar">
                <b><br>Legume la gratar ~ 14lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/orez.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "orez">
                <input type = "number" name = "comanda" value = "orez">
                <b><br>Orez ~ 9lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/piure.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "piure_cartofi">
                <input type = "number" name = "comanda" value = "piure_cartofi">
                <b><br>Piure de cartofi ~ 9lei</br></b></figcaption>
        </figure>
    </div>
    <br>
    <h1>Fel Principal</h1>
    <div class="container">

        <figure>
            <img src="images/coastelagratar.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "coaste_gratar">
                <input type = "number" name = "comanda" value = "coaste_gratar">
                <b><br>Coaste la gratar ~ 32lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/pulpedepui.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "pulpe_pui">
                <input type = "number" name = "comanda" value = "pulpe_pui">
                <b><br>Pulpe de pui ~ 18lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/sarmale.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "sarmale">
                <input type = "number" name = "comanda" value = "sarmale">
                <b><br>Sarmale ~ 20lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/snitel.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "snitel_pui">
                <input type = "number" name = "comanda" value = "snitel_pui">
                <b><br>Snitel de pui ~ 16lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/tocanadeporc.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" value = "tocana_porc">
                <input type = "number" name = "comanda" value = "tocana_porc">
                <b><br>Tocana de porc ~ 23lei</br></b></figcaption>
        </figure>
    </div>

</form>
</body>
</html>
