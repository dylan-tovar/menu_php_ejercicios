<html> 
<head> 
<title>El gran agujero de seguridad</title> 
</head> 
<body> 
<h2>Seguridad</h2> 
<form action="ejercicio_32_1.php" method="post"> 
    Contraseña: <input type="password" name="pass"> 
    <input type="submit" value="Enviar"> 
</form> 

<?php 
// Iniciar sesión PHP (si necesitas mantener la autenticación entre diferentes páginas)
session_start(); 

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Comprobar si la contraseña fue enviada
    if (isset($_POST['pass'])) {
        $pass = $_POST['pass']; // Obtener la contraseña del formulario de manera segura
        // Verificar si la contraseña es correcta
        if ($pass === "abc_xyz_123") { 
            $_SESSION['login'] = true; // Usar sesión para mantener la autenticación
        } else {
            echo "<p>Contraseña incorrecta.</p>";
        }
    }
}

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['login']) && $_SESSION['login'] === true) { 
    echo "<p>Aquí empieza el arma secreta.</p>"; 
} else {
    echo "<p>Introduce la contraseña para acceder al contenido protegido.</p>";
}
?> 

</body> 
</html>