<?php
if (isset($_POST['direccion']) && !empty($_POST['direccion'])) {
    $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_URL);
    $url = "http://$direccion";
    header("Location: $url");
    header("Referer: https://tu-sitio-web.com"); // Agrega la cabecera Referer
    exit;
} else {
    header("Location: error.php");
    exit;
}
?>