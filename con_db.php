<?php
$conex = mysqli_connect("localhost:3307","root","root","matriculas");

if (!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
