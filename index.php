
<!--conectarea bazei de date pe serverul local-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant";

// crearea conexiunii
$conn = new mysqli($servername, $username, $password, $database);

// verificarea conexiunii
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Gestiunea comenzilor intr-un restaurant
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="images/background.jpg">

    <h1>RESTAURANT AMARILLO</h1>
    <br>
    <button class="button-play"><a href="comenzi.php"><h3>Comanda</h3></a></button>
    <br>
    <button class="button-play"><a href="meniu.php"><h3>Meniu</h3></a></button>
    <br>
    <button class="button-play"><a href="desprenoi.php"><h3>Despre noi</h3></a></button>
</body>
</html>
