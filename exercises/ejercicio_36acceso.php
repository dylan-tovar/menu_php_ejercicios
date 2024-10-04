<?php 
$mysqli = new mysqli("localhost", "root", "", "agenda");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("<p>No se ha podido establecer la conexión con MySQL: " . $mysqli->connect_error . "</p>");
}
?>