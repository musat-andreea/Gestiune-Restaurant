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

if (isset($_POST["adauga_produs"])) {
    $nume = $_POST['nume'];
    $categorie = $_POST['categorie'];
    $pret = $_POST['pret'];
    $gramaj = $_POST['gramaj'];
    $imagine = $_POST['imagine'];

    $sql_insert_categorie = "INSERT INTO categorie(nume) VALUES('$categorie')";

    $sql_check_categorie = "SELECT categorie_id FROM categorie WHERE nume = '$categorie' LIMIT 1";

    $result = $conn->query($sql_check_categorie);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Va intra o singura data in while deoarece avem LIMIT 1
            $categorie_id = $row['categorie_id'];
            $sql_insert_meniu = "INSERT INTO meniu(categorie_id, nume, pret, gramaj, imagine)
                                    VALUES ($categorie_id, '$nume', $pret, $gramaj, '$imagine')";

            if ($conn->query($sql_insert_meniu) === TRUE) {
                echo "New record created successfully in menu";
                header("Location: admin.php");
            } else {
                echo "Error: " . $sql . $sql1 . "<br>" . $conn->error;
            }
        }
    } else {
        // Vom crea categoria
        if ($conn->query($sql_insert_categorie) === TRUE) {
            echo "New category added succesfully";
            $result = $conn->query($sql_check_categorie);

            while($row = $result->fetch_assoc()) {
                // Va intra o singura data in while deoarece avem LIMIT 1
                $categorie_id = $row['categorie_id'];
                $sql_insert_meniu = "INSERT INTO meniu(categorie_id, nume, pret, gramaj, imagine)
                                    VALUES ($categorie_id, '$nume', $pret, $gramaj, '$imagine')";

                if ($conn->query($sql_insert_meniu) === TRUE) {
                    echo "New record created successfully in menu";
                    header("Location: admin.php");
                } else {
                    echo "Error: " . $sql . $sql1 . "<br>" . $conn->error;
                }
            }

            header("Location: admin.php");
        } else {
            echo "Error: " . $sql . $sql1 . "<br>" . $conn->error;
        }

    }
    $conn->close();

}
else if (isset($_POST["sterge_produs"])) {
    $nume = $_POST['nume'];
    $categorie = $_POST['categorie'];
    $sql = "DELETE FROM meniu WHERE nume='$nume'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
