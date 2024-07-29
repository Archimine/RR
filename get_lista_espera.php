<?php
include("con_db.php");

$sql = "SELECT * FROM lista_espera";
$result = $conn->query($sql);

$lista_espera = array();
while ($row = $result->fetch_assoc()) {
    $lista_espera[] = $row;
}

$conn->close();
?>
