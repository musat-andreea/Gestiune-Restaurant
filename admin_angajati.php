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

//verific de la ce buton de submit a venit request-ul post
//si decid ce actiune execut

if (isset($_POST["adauga_angajat"])) {
    //variabilele in care retin datele din request
    //si care trebuie introduse in baza de date
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $cnp = $_POST['cnp'];
    $data_angajarii = $_POST['data_angajarii'];
    $functie = $_POST['functie'];
    $salariu = $_POST['salariu'];

    $sql = "INSERT INTO angajati(nume, prenume, cnp, data_angajarii, functie, salariu)
VALUES ('$nume', '$prenume', '$cnp', '$data_angajarii', '$functie', $salariu)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else if (isset($_POST["sterge_angajat"])) {
    //variabile in care retin datele din request pentru a strege angajatul din baza de date
    $cnp = $_POST['cnp'];
    $sql = "DELETE FROM angajati WHERE cnp='$cnp'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else if (isset($_POST["modifica_angajat"])) {
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $cnp = $_POST['cnp'];
    $data_angajarii = $_POST['data_angajarii'];
    $functie = $_POST['functie'];
    $salariu = $_POST['salariu'];
    $angajat_id = $_POST['angajat_id'];

    $sql = "UPDATE angajati SET nume = '$nume', prenume = '$prenume', cnp = '$cnp', data_angajarii = '$data_angajarii', functie = '$functie', salariu = $salariu WHERE angajat_id = $angajat_id";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>


