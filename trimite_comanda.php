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

// luarea json ului din request ul de tip POST si il interpretam ca array asociativ assoc
$data = json_decode(file_get_contents('php://input'), true);
$masa = $data['masa'];

$data = $data['comanda'];

$insert_coamanda = "INSERT INTO comanda(masa_id) VALUES ($masa) ";
if ($conn->query($insert_coamanda) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $insert_coamanda . "<br>" . $conn->error;
}

for ($i = 0; $i < count($data); $i++)
{
    //echo "Produs $i : { Nume: " . $data[$i]['nume_produs'] . " || Cantitate: " . $data[$i]['cantitate'] . "\n";

    $nume = $data[$i]['nume_produs'];
    $cantitate = $data[$i]['cantitate'];

    $insert_detalii_comanda = "INSERT INTO detalii_comanda (comanda_id, produs_id, nr_bucati) VALUES (
    ( SELECT MAX(comanda_id) FROM comanda),
    ( SELECT produs_id FROM meniu m WHERE m.nume = '$nume'),
    $cantitate
);

";
    if ($conn->query($insert_detalii_comanda) === TRUE) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $insert_detalii_comanda . "<br>" . $conn->error;
    }

}

?>