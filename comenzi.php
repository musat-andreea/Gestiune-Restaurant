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

<form method = "post" id = "trimite_comanda">
        Selectati masa:
        <select id = "masa">

        <?php
            $selecteaza_masa = "SELECT nr_masa FROM masa WHERE stare = 'open'";
            $result0 = $conn->query($selecteaza_masa);
            if (!$result0) {
                trigger_error('Invalid query: ' . $conn->error);
        }
        if($result0->num_rows >0) {
            while($row1 = $result0->fetch_assoc()) {
                echo "<option value = \"" . $row1["nr_masa"] . "\">Masa" . $row1["nr_masa"] . "</option>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </select>

    Selectati angajatul:
    <select id = "ang">

        <?php
        $selecteaza_nume_angajat = "SELECT nume, prenume, angajat_id FROM angajati";
        $result01 = $conn->query($selecteaza_nume_angajat);
        if (!$result01) {
            trigger_error('Invalid query: ' . $conn->error);
        }
        if($result01->num_rows >0) {
            while($row01 = $result01->fetch_assoc()) {
                echo "<option value = \"" . $row01["angajat_id"] . "\">" . $row01["nume"] . " " . $row01["prenume"] . "</option>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </select>

        <?php

            $categorie_id = "SELECT c.nume AS categ, c.categorie_id AS categ_id FROM categorie C";
            $result1 = $conn->query($categorie_id);
            if (!$result1) {
                trigger_error('Invalid query: ' . $conn->error);
            }
            if($result1->num_rows >0) {
                while($row1 = $result1->fetch_assoc()) {

                    echo "<h1>" . $row1["categ"] . "</h1>";
                    echo "<div class=\"container\">";
                    $sql1 = "SELECT m.nume AS nume, pret, imagine FROM meniu m WHERE m.categorie_id =" . $row1["categ_id"];
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
                    echo "</div>";
                }
            }
            ?>
    <br>
    <input type="submit"  class="button-play" value = "Trimite comanda">
    <br>

    <div> <span id = "success-message"> </span> </div>
</form>

<script type = "text/javascript">

    //cantitatea unui produs
    function getProductQuantity(input)
    {
        let correspondingInputQuantity = document.querySelector("input[type=\"number\"][data-item=\"" + input.getAttribute('data-item') + "\"]");
        quantity = correspondingInputQuantity.value;

        return quantity;
    }

    //total de plata pe produse (se apeleaza la selectare unui produs -> CHECK)
    document.querySelectorAll('input[type=\"checkbox\"]').forEach(function (el, i) {
        el.addEventListener('click', function (e) {
            var inputs = document.getElementsByTagName('input');

            var sum = 0;
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type.toLowerCase() == 'checkbox' && inputs[i].name == 'comanda' && inputs[i].checked == true) {
                    if (parseInt(inputs[i].getAttribute('data-price'))) {
                        let quantity = getProductQuantity(inputs[i]);
                        sum = sum + (parseInt(inputs[i].getAttribute('data-price')) * parseInt(quantity));
                        console.log(parseInt(inputs[i].getAttribute('data-price')));
                    }
                }
            }

            var cartItem = document.getElementById('to_pay');
            cartItem.innerText = sum;
        });
    });

    //total pentru cantitate -> se apeleaza cand schimbi cantitatea
    document.querySelectorAll('input[type=\"number\"]').forEach(function (el, i) {
        el.addEventListener('change', function (e) {
            var inputs = document.getElementsByTagName('input');

            var sum = 0;
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type.toLowerCase() == 'checkbox' && inputs[i].name == 'comanda' && inputs[i].checked == true) {
                    if (parseInt(inputs[i].getAttribute('data-price'))) {
                        let quantity = getProductQuantity(inputs[i]);
                        sum = sum + (parseInt(inputs[i].getAttribute('data-price')) * parseInt(quantity));
                        console.log(parseInt(inputs[i].getAttribute('data-price')));
                    }
                }
            }

            var cartItem = document.getElementById('to_pay');
            cartItem.innerText = sum;
        });
    });


    var form = document.getElementById("trimite_comanda");

    //adaug un eveniment pe form-ul care imi adauga comanda
    form.addEventListener('submit', function (event)    {
        event.preventDefault(); //nu se mai executa evenimentul default de pe form(action)
        //luam produsele bifate
        var orderedProducts = document.querySelectorAll("input[type=checkbox]:checked");

        var masa = document.getElementById("masa");
        var masa_selectata = masa.options[masa.selectedIndex].value;
        //
        var angajat = document.getElementById("ang");
        var angajat_selectat = angajat.options[angajat.selectedIndex].value;

        let arrayPost = {
            "masa":parseInt(masa_selectata),
            "angajat":parseInt(angajat_selectat),
            "comanda": []
        };
        for (var i = 0; i < orderedProducts.length; i++)
        {
            let produs = {'nume_produs' : orderedProducts[i].getAttribute('data-item'), 'cantitate': getProductQuantity(orderedProducts[i])};
            arrayPost["comanda"].push(produs);
        }

        //request post catre trimitere_comanda cu produsele comandate
        fetch('trimite_comanda.php', {
            method: 'POST',
            headers: {'Content-Type':'application/json'}, // this line is important, if this content-type is not set it wont work
            //continutul pe care l trimit
            body: JSON.stringify(arrayPost)
        })
        //dupa raspunsul din trimite_comanda.php, comanda a fost trimisa cu succes
            .then(
            function (response)
            {
                console.log("S-A TRIMIS");
                var mesaj_box = document.getElementById("success-message");
                mesaj_box.innerHTML = "<b>Comanda plasata cu succes!</b>";
            }
                );
    });
</script>


</body>
</html>
