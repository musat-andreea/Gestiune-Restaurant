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

if (isset($_POST["starea_mesei"])) {
    $numar = $_POST['numar'];
    $stare = $_POST['stare'];

    $sql = "UPDATE masa SET  stare = '$stare', nr_masa = $numar WHERE nr_masa=$numar";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>