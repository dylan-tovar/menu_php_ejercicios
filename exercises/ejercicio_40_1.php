<?php


if (isset($_POST['mail']) && !empty($_POST['mail'])) {
    // Asignamos el valor del campo de formulario "mail" a la variable $email
    $email = $_POST['mail'];

    // Establecemos una conexión a la base de datos
    $dsn = "mysql:host=localhost;dbname=phpfacil";
    $username = "root"; 
    $conexion = new PDO($dsn, $username);

    // Establecemos el modo de error de PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta para verificar si existe un estudiante con el correo electrónico proporcionado
    $query = "SELECT * FROM alumnos WHERE mail = '$email'";
    $result = $conexion->query($query);

    // Verificamos si existe un estudiante con el correo electrónico proporcionado
    if ($result->rowCount() > 0) {
        echo "Existe un alumno con ese mail.";
    } else {
        echo "No existe un alumno con ese mail.";
    }

    // Cerramos la conexión a la base de datos
    $conexion = null;
} else {
    echo "No se ha enviado un correo electrónico.";
}
?>