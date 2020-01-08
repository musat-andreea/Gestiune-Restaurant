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
        Meniu
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="stylemeniu.css">
</head>
<body background="images/funda01.jpg">

    <?php
    /* selectarea denumirii, pretului si imaginii produselor din meniu dupa categorie */
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
            //stochez rezultatul querry-ului sql1 in result
            $result = $conn->query($sql1);
            if (!$result) {
                trigger_error('Invalid query: ' . $conn->error);
            }
            //parsez fiecare linie din rezultat si adaug o imagine noua
            if ($result->num_rows >0) {
                while($row = $result->fetch_assoc()) {
                    echo "<figure>";
                    echo "<img src=\"images/" . $row["imagine"] . "\">";
                    echo "<figcaption>";
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
</div>

</form>
</body>
</html>
