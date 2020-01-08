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
    <title>Despre noi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="stylemeniu.css">
    <link rel="stylesheet" type="text/css" href="stylecomenzi.css">
    <link rel="stylesheet" type="text/css" href="styledesprenoi.css">
</head>
<body background="images/fundaldesprenoi.jpg">
<h1>Desertul preferat</h1>
<br>
<h5>~ desertul cu cele mai multe comenzi</h5>
<?php
$sql = "select m.nume as nume, m.imagine as img , sum(nr_bucati)
from meniu m inner join categorie c on (m.categorie_id = c.categorie_id and c.nume='Desert')
inner join detalii_comanda d on d.produs_id = m.produs_id
group by m.nume, m.imagine
having sum(nr_bucati) >= all (select sum(nr_bucati) from meniu m inner join categorie c on (m.categorie_id = c.categorie_id and c.nume='Desert')
inner join detalii_comanda d on d.produs_id = m.produs_id
group by m.nume, m.imagine)";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><h5>" . $row["nume"] . "</h5></td>";
        echo "<td><img src = \"images/" . $row["img"] . "\"></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
?>
<br><br>
<h1>Ospatarul lunii</h1>
<br>
<h5>~ ospatarul cu cele mai multe comenzi</h5>
<?php
$sql1 = "SELECT a.nume AS nume, a.prenume AS prenume
FROM angajati a INNER JOIN comanda c ON a.angajat_id = c.angajat_id
WHERE a.functie = 'Ospatar'
GROUP BY a.nume, a.prenume, month(c.data)
having count(*) >= all (select count(*) FROM angajati a INNER JOIN comanda c ON a.angajat_id = c.angajat_id
WHERE a.functie = 'Ospatar'
GROUP BY a.nume, a.prenume);
";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    while ($row1 = $result1->fetch_assoc()) {
        echo "<tr>";
        echo "<br>";
        echo "<td><h5>" . $row1["nume"] . " " . $row1["prenume"] . "</h5></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
?>
<br><br>
<h5>Ospatarul ce nu a luat nicio comanda</h5>
<?php
$sql11 = "SELECT a.nume as nume, a.prenume as prenume from angajati a
where functie = \"Ospatar\" and angajat_id not in (select c.angajat_id from comanda c where c.angajat_id is not null);
";
$result11 = $conn->query($sql11);
if ($result11->num_rows > 0) {
    while ($row11 = $result11->fetch_assoc()) {
        echo "<tr>";
        echo "<br>";
        echo "<td><h5>" . $row11["nume"] . " " . $row11["prenume"] . "</h5></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
?>
<br><br>
<h1>Categoria de top</h1>
<br>
<h5>~ categoria cu cele mai multe produse</h5>
<?php
$sql2 = "select c.nume as nume from categorie c
inner join meniu m on c.categorie_id = m.categorie_id
group by c.nume
having count(*) >= all (select count(*) from categorie c
inner join meniu m on c.categorie_id = m.categorie_id
group by c.nume)
";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    while ($row2 = $result2->fetch_assoc()) {
        echo "<tr>";
        echo "<br>";
        echo "<td><h5>" . $row2["nume"] . "</h5></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
?>

<br><br>
<h1>Masa preferata</h1>
<br>
<h5>~ masa cu cele mai multe comenzi</h5>
<?php
$sql3 = "SELECT m.nr_masa as nr from masa m inner join comanda c on m.masa_id = c.masa_id
group by nr_masa
having count(c.masa_id) >= all(select count(c.masa_id) from masa m inner join comanda c on m.masa_id = c.masa_id
group by nr_masa)

";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
    while ($row3 = $result3->fetch_assoc()) {
        echo "<tr>";
        echo "<br>";
        echo "<td><h5>Masa " . $row3["nr"] . "</h5></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
?>

<br><br>
<h1>Istoric mese</h1>
<br>
<h5>~ cea mai recenta comanda de la fiecare masa</h5>
<?php
$sql4 = "select c.comanda_id as nr, m.nr_masa as masa, c.data as dt
from comanda c
inner join (select masa_id, max(data) as datacom
           from comanda c
           group by masa_id) s 
           on c.masa_id=s.masa_id and c.data=s.datacom join masa m on c.masa_id=m.masa_id

";
$result4 = $conn->query($sql4);
if ($result4->num_rows > 0) {
    while ($row4 = $result4->fetch_assoc()) {
        echo "<tr>";
        echo "<br>";
        echo "<td><h5>Masa " . $row4["masa"] . "</h5></td>";
        echo "<td><h5>Nr Comenzii " . $row4["nr"] . "</h5></td>";
        echo "<td><h5>Data si ora:" . $row4["dt"] . "</h5></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
?>

<br><br>
<h1>Cea mai buna zi</h1>
<br>
<h5>~ ziua cu cele mai multe comenzi</h5>
<?php
$sql5 = "select c.zi as ziua, s.com_max as cmax
from (select day(data) as zi, count(data) as nr_comenzi
     from comanda 
     group by day(data)) c join 
     (select max(c.nr_comenzi) as com_max
     from (select day(data) as zi, count(data) as nr_comenzi from comanda
          group by day(data)) c)s on c.nr_comenzi = s.com_max

";
$result5 = $conn->query($sql5);
if ($result5->num_rows > 0) {
    while ($row5 = $result5->fetch_assoc()) {
        echo "<tr>";
        echo "<br>";
        echo "<td><h5>Ziua " . $row5["ziua"] . "</h5></td>";
        echo "<td><h5>Numarul comenzilor: " . $row5["cmax"] . "</h5></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
?>


</body>
</html>