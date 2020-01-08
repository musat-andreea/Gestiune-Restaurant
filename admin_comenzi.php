<!--conectarea bazei de date pe serverul local-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant";

// crearea conexiunii
$conn = new mysqli($servername, $username, $password, $database);

// verificarea conxiunii
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if (isset($_POST["stergere_comanda"])) {
    $id_comanda = $_POST['stergere_comanda'];
    $sql = "DELETE FROM comanda WHERE comanda_id=$id_comanda";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
}