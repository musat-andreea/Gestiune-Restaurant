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
        Administrator
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<ul id="dropdown1" class="dropdown-content">
    <li><a href="index.php">Restaurant</a></li>
    <li><a href="meniu.php">Meniu</a></li>
    <li class="divider"></li>
    <li><a href="comenzi.php">Comenzi</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="/" class="brand-logo">Restaurant Amarillo</a>
        <ul class="right hide-on-med-and-down">

            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Administrare</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <!-- Page Content goes here -->
    <div class="row">
        <div class="col s12">
            <center><H1> Administrarea angajatilor </H1></center>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <h2> Lista angajati: </h2>
        </div>
        <table class="highlight">
            <thead>
            <tr>
                <th>Nume angajat</th>
                <th>Prenume angajat</th>
                <th>CNP</th>
                <th>Data angajarii</th>
                <th>Functia</th>
                <th>Salariu</th>
                <th>Actiuni</th>

            </tr>
            </thead>

            <tbody id="faculties-table-content">
            <?php
            $sql = "SELECT angajat_id, nume, prenume, cnp, data_angajarii, functie, salariu FROM angajati";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<form method = 'post' action='admin_angajati.php'>";
                    echo "<tr>";
                    echo "<td> <input type = 'text' name = 'nume' value = '" . $row["nume"] . "'></td>";
                    echo "<td> <input type = 'text' name = 'prenume' value = '" . $row["prenume"] . "'></td>";
                    echo "<td> <input type = 'text' name = 'cnp' value = '" . $row["cnp"] . "'></td>";
                    echo "<td> <input type = 'text' name = 'data_angajarii' value = '" . $row["data_angajarii"] . "'></td>";
                    echo "<td> <input type = 'text' name = 'functie' value = '" . $row["functie"] . "'></td>";
                    echo "<td> <input type = 'number' name = 'salariu' value = '" . $row["salariu"] . "'> </td>";
                    echo "<input type ='hidden' name = 'angajat_id' value = '" . $row["angajat_id"] . "'>";
                    echo "<td> <input type = 'submit' name = 'modifica_angajat' value = 'Modifica'> </td>";
                    echo "</tr>";
                    echo "</form>";
                }
            } else {
                echo "0 results";
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="col s12">
        <h2> Adauga angajat </h2>
        <form method="POST" id="add_exam" action="admin_angajati.php">
            <input type="text" placeholder="Nume angajat" name="nume"></input>
            <input type="text" placeholder="Prenume angajat" name="prenume"></input>
            <input type="text" placeholder="CNP angajat" name="cnp"></input>
            <input type="date" placeholder="Data angajarii" name="data_angajarii"></input>
            <input type="text" placeholder="Functia" name="functie"></input>
            <input type="number" placeholder="Salariu" name="salariu"></input>
            <input type="submit" name="adauga_angajat" class="btn waves-effect waves-light" value="Adauga">
        </form>
    </div>

    <div class="col s12">
        <h2> Sterge angajat </h2>
        <form method="POST" action="admin_angajati.php">
            <input type="text" placeholder="Nume angajat" name="nume"></input>
            <input type="text" placeholder="Prenume angajat" name="prenume"></input>
            <input type="text" placeholder="CNP angajat" name="cnp"></input>
            <input type="submit" name="sterge_angajat" class="btn waves-effect waves-light" value="Sterge">
        </form>
    </div>

<div class="row">
    <div class="col s12">
        <h2> Lista produselor din meniu: </h2>
    </div>
    <table class="highlight">
        <thead>
        <tr>
            <th>Denumirea produsului</th>
            <th>Categorie</th>
            <th>Pret</th>
            <th>Gramaj</th>
        </tr>
        </thead>

        <tbody id="faculties-table-content">
        <?php
        $sql1 = "SELECT m.nume AS nume_produs_meniu, c.nume AS nume_categorie, pret, gramaj FROM meniu m, categorie c WHERE m.categorie_id = c.categorie_id";
        $result = $conn->query($sql1);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nume_produs_meniu"] . "</td>";
                echo "<td>" . $row["nume_categorie"] . "</td>";
                echo "<td>" . $row["pret"] . "</td>";
                echo "<td>" . $row["gramaj"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </tbody>
    </table>
</div>
<div class="col s12">
    <h2> Adauga produs </h2>
    <form method="POST" action="admin_produse.php">
        <input type="text" placeholder="Denumire produs" name="nume"></input>
        <input type="text" placeholder="Categorie" name="categorie"></input>
        <input type="number" placeholder="Pret" name="pret"></input>
        <input type="number" placeholder="Gramaj" name="gramaj"></input>
        <input type="text" placeholder="Imagine" name="imagine"></input>
        <input type="submit" name="adauga_produs" class="btn waves-effect waves-light" value="Adauga">
    </form>
</div>

<div class="col s12">
    <h2> Sterge produs </h2>
    <form method="POST" action="admin_produse.php">
        <input type="text" placeholder="Denumire produs" name="nume"></input>
        <input type="text" placeholder="Categorie" name="categorie"></input>
        <input type="submit" name="sterge_produs" class="btn waves-effect waves-light" value="Sterge">
    </form>
</div>

<div class="row">
    <div class="col s12">
        <h2> Starea meselor: </h2>
    </div>
    <table class="highlight">
        <thead>
        <tr>
            <th>Numarul mesei</th>
            <th>Starea mesei</th>
        </tr>
        </thead>

        <tbody id="faculties-table-content">
        <?php
        $sql12 = "SELECT nr_masa, stare FROM masa";
        $result12 = $conn->query($sql12);
        if ($result12->num_rows > 0) {
            while ($row12 = $result12->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row12["nr_masa"] . "</td>";
                echo "<td>" . $row12["stare"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </tbody>
    </table>
</div>

<div class="col s12">
    <h2>Modifica starea mesei </h2>
    <form method="POST" action="admin_masa.php">
        <input type="number" placeholder="Numarul mesei" name="numar"></input>
        <input type="text" placeholder="open/close" name="stare"></input>
        <input type="submit" name="starea_mesei" class="btn waves-effect waves-light" value="Adauga">
    </form>
</div>


<div class="row">
    <div class="col s12">
        <h2> Lista comenzilor: </h2>
    </div>
    <table class="highlight">
        <thead>
        <tr>
            <th>Data si ora comenzii</th>
            <th>Produse</th>
            <th>Nr bucati</th>
            <th>Numar comanda</th>
        </tr>
        </thead>

        <tbody id="faculties-table-content">
        <form method="post" action="admin_comenzi.php">
            <?php
            $sql = "SELECT c.comanda_id AS comanda_id, data, nume, nr_bucati FROM comanda c, meniu m, detalii_comanda d WHERE c.comanda_id = d.comanda_id AND d.produs_id = m.produs_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["data"] . "</td>";
                    echo "<td>" . $row["nume"] . "</td>";
                    echo "<td>" . $row["nr_bucati"] . "</td>";
                    echo "<td>" . "<input type = 'submit' class = 'btn' name = 'stergere_comanda' value = '" . $row["comanda_id"] . "'> Sterge </input> </td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            ?>

        </form>
        </tbody>
    </table>
</div>


</div>


</div>


<script>
    $(document).ready(function () {
        $(".dropdown-trigger").dropdown();
    });
</script>
</body>
</html>
