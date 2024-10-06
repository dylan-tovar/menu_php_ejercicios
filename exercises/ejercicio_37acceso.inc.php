<?php
$dp = mysqli_connect("localhost", "root", "");
if (!$dp) {
    die("<p>No se ha podido establecer la conexión con MySQL. Error: " . mysqli_connect_error() . "</p>");
}

if (!mysqli_select_db($dp, "agenda")) {
    die("<p>No se ha podido establecer la conexión con la base de datos. Error: " . mysqli_error($dp) . "</p>");
}


