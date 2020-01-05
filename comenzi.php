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
<div class = "cart"><b> TOTAL DE PLATA:</b> <span id = "to_pay"> 0 </span></div>

<form method = "post">
    <h1>Supe/Ciorbe</h1>
    <div class="container">
        <?php
            $sql1 = "SELECT m.nume AS nume, pret, imagine FROM meniu m WHERE m.categorie_id = (SELECT c.categorie_id FROM categorie c WHERE c.nume = \"Supe/Ciorbe\")";
            $result = $conn->query($sql1);
            if (!$result) {
                trigger_error('Invalid query: ' . $conn->error);
            }
            if ($result->num_rows >0) {
                while($row = $result->fetch_assoc()) {
                    echo "<figure>";
                    echo "<img src=\"images/" . $row["imagine"] . "\">";
                    echo "<figcaption>";
                    echo "<input type = \"checkbox\" name = \"comanda\" data-item = \"" . $row["nume"] . "\" data-price = \"" . $row["pret"] . "\">";
                    echo "<input type = \"number\" name = \"comanda\" data-item = \"" . $row["nume"] . "\" value = \"0\">";
                    echo "<b><br>" . $row["nume"] . "~" . $row["pret"] . "lei" ."</br></b></figcaption>";
                    echo "</figcaption>";
                    echo "</figure>";
                }
            } else {
                echo "0 results";
            }
            ?>

    </div>

    <br>
    <h1>Bauturi</h1>
    <div class="container">
        <figure>
            <img src="images/apa.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "apa" data-price = "5">
                <input type = "number" name = "comanda" data-item = "apa" value = "0">
                <b><br>Apa ~ 5lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/cafea.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "cafea" data-price = "6">
                <input type = "number" name = "comanda" data-item = "cafea" value = "0">
                <b><br>Cafea ~ 6lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/freshportocale.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "fresh_portocale" data-price = "10">
                <input type = "number" name = "comanda" data-item = "fresh_portocale" value = "0">
                <b><br>Fresh de portocale ~ 10lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/greenapple.jpeg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "green_apple" data-price = "16">
                <input type = "number" name = "comanda" data-item = "green_apple" value = "0">
                <b><br>Green Apple ~ 16lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/limonada.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "limonada" data-price = "12">
                <input type = "number" name = "comanda" data-item = "limonada" value = "0">
                <b><br>Limonada ~ 12lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/pinacolada.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "pina_colada" data-price = "16">
                <input type = "number" name = "comanda" data-item = "pina_colada" value = "0">
                <b><br>Pina Colada ~ 16lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/sucuri.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "sucuri" data-price = "7">
                <input type = "number" name = "comanda" data-item = "sucuri" value = "0">
                <b><br>Sucuri ~ 7lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/vin.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "vin" data-price = "16">
                <input type = "number" name = "comanda" data-item = "vin" value = "0">
                <b><br>Vin ~ 16lei</br></b></figcaption>
        </figure>
    </div>
    <br>
    <h1>Desert</h1>
    <div class="container">
        <figure>
            <img src="images/clatitecuciocolata.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "clatite_ciocolata" data-price = "16">
                <input type = "number" name = "comanda" data-item = "clatite_ciocolata" value = "0">
                <b><br>Clatite cu ciocolata ~ 16lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/inghetata.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "inghetata" data-price = "8">
                <input type = "number" name = "comanda" data-item = "inghetata" value = "0">
                <b><br>Inghetata ~ 8lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/papanasi.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "papanasi" data-price = "14">
                <input type = "number" name = "comanda" data-item = "papanasi" value = "0">
                <b><br>Papanasi ~ 14lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/tiramisu.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "tiramisu" data-price = "12">
                <input type = "number" name = "comanda" data-item = "tiramisu" value = "0">
                <b><br>Tiramisu ~ 12lei</br></b></figcaption>
        </figure>
    </div>
    <br>
    <h1>Garnituri</h1>
    <div class="container">
        <figure>
            <img src="images/cartoficopti.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "cartofi_copti" data-price = "9">
                <input type = "number" name = "comanda" data-item = "cartofi_copti" value = "0">
                <b><br>Cartofi copti ~ 9lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/cartofiprajiti.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "cartofi_prajiti" data-price = "8">
                <input type = "number" name = "comanda" data-item = "cartofi_prajiti" value = "0">
                <b><br>Cartofi prajiti ~ 8lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/legumelagratar.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "legume_gratar" data-price = "14">
                <input type = "number" name = "comanda" data-item = "legume_gratar" value = "0">
                <b><br>Legume la gratar ~ 14lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/orez.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "orez" data-price = "9">
                <input type = "number" name = "comanda" data-item = "orez" value = "0">
                <b><br>Orez ~ 9lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/piure.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "piure_cartofi" data-price = "9">
                <input type = "number" name = "comanda" data-item = "piure_cartofi" value = "0">
                <b><br>Piure de cartofi ~ 9lei</br></b></figcaption>
        </figure>
    </div>
    <br>
    <h1>Fel Principal</h1>
    <div class="container">

        <figure>
            <img src="images/coastelagratar.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "coaste_gratar" data-price = "32">
                <input type = "number" name = "comanda" data-item = "coaste_gratar" value = "0">
                <b><br>Coaste la gratar ~ 32lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/pulpedepui.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "pulpe_pui" data-price = "18">
                <input type = "number" name = "comanda" data-item = "pulpe_pui" value = "0">
                <b><br>Pulpe de pui ~ 18lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/sarmale.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "sarmale" data-price = "20">
                <input type = "number" name = "comanda" data-item = "sarmale" value = "0">
                <b><br>Sarmale ~ 20lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/snitel.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "snitel_pui" data-price = "16">
                <input type = "number" name = "comanda" data-item = "snitel_pui" value = "0">
                <b><br>Snitel de pui ~ 16lei</br></b></figcaption>
        </figure>
        <figure>
            <img src="images/tocanadeporc.jpg">
            <figcaption>
                <input type = "checkbox" name = "comanda" data-item = "tocana_porc" data-price = "23">
                <input type = "number" name = "comanda" data-item = "tocana_porc" value = "0">
                <b><br>Tocana de porc ~ 23lei</br></b></figcaption>
        </figure>
    </div>

</form>

<script type = "text/javascript">
    document.querySelectorAll('input[type=\"checkbox\"]').forEach(function (el, i) {
        el.addEventListener('click', function (e) {
            var inputs = document.getElementsByTagName('input');

            var sum = 0;
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type.toLowerCase() == 'checkbox' && inputs[i].name == 'comanda' && inputs[i].checked == true) {
                    if (parseInt(inputs[i].getAttribute('data-price'))) {
                        let correspondingInputQuantity = document.querySelector("input[type=\"number\"][data-item=\"" + inputs[i].getAttribute('data-item') + "\"]");
                        let quantity = correspondingInputQuantity.value;
                        sum = sum + (parseInt(inputs[i].getAttribute('data-price')) * parseInt(quantity));
                        console.log(parseInt(inputs[i].getAttribute('data-price')));
                    }
                }
            }

            var cartItem = document.getElementById('to_pay');
            cartItem.innerText = sum;
        });
    });


    document.querySelectorAll('input[type=\"number\"]').forEach(function (el, i) {
        el.addEventListener('change', function (e) {
            var inputs = document.getElementsByTagName('input');

            var sum = 0;
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type.toLowerCase() == 'checkbox' && inputs[i].name == 'comanda' && inputs[i].checked == true) {
                    if (parseInt(inputs[i].getAttribute('data-price'))) {
                        let correspondingInputQuantity = document.querySelector("input[type=\"number\"][data-item=\"" + inputs[i].getAttribute('data-item') + "\"]");
                        let quantity = correspondingInputQuantity.value;
                        sum = sum + (parseInt(inputs[i].getAttribute('data-price')) * parseInt(quantity));
                        console.log(parseInt(inputs[i].getAttribute('data-price')));
                    }
                }
            }

            var cartItem = document.getElementById('to_pay');
            cartItem.innerText = sum;
        });
    });

</script>

<br>
<button class="button-play"><h3>Trimite comanda</h3></button>
<br>
</body>
</html>
