<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("ejercicio_36acceso.php");

if (isset($_POST['submit'])) {
    $nombre = trim($_POST['Nombre']);
    $apellido = trim($_POST['Apellido']);
    $tratamiento = $_POST['Tratamiento'];
    $calle = trim($_POST['Calle']);
    $cp = trim($_POST['CP']);
    $localidad = trim($_POST['Localidad']);
    $tel = trim($_POST['Tel']);
    $movil = trim($_POST['Movil']);
    $mail = trim($_POST['Mail']);
    $website = trim($_POST['Website']);
    $categoria = $_POST['Categoria'];
    $notas = trim($_POST['Notas']);

    if (empty($nombre)) {
        echo "<p>Introduzca el <b>nombre</b>.</p>";
    } elseif (strlen($apellido) < 3) {
        echo "<p>El apellido debe tener como mínimo <b>3</b> caracteres.</p>";
    } else {
        $stmt = $mysqli->prepare("INSERT INTO direcciones (Tratamiento, Nombre, Apellido, Calle, CP, Localidad, Tel, Movil, Mail, Website, Categoria, Notas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $mysqli->error);
        }

        $stmt->bind_param("ssssssssssss", $tratamiento, $nombre, $apellido, $calle, $cp, $localidad, $tel, $movil, $mail, $website, $categoria, $notas);
        
        if ($stmt->execute()) {
            echo "<p> Datos agregados con éxito.</p>";
        } else {
            echo "<p>Error al agregar los datos: " . $stmt->error . "</p>";
        }
        
        $stmt->close();
        echo "[ <a href='javascript:history.back()'>Volver</a> ] - [ <a href='{$_SERVER['PHP_SELF']}'> Introducir nueva fila</a>]";
    }
} else {
    $sql2 = "SELECT * FROM categorias";
    $resultado2 = $mysqli->query($sql2);
    $campocat = "";

    while ($row = $resultado2->fetch_assoc()) {
        $campocat .= "<option value='{$row['Categoria']}'>{$row['Categoria']}</option>\n"; 
    }
}

$mysqli->close();
?>

<html>
<head>
    <title>Introducir Direcciones</title>
</head>
<body>
<h3>Introducir direcciones</h3>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <table>
        <tr><td>Tratamiento:</td><td><select name="Tratamiento">
            <option>Sr.</option>
            <option>Sra.</option>
        </select></td></tr>
        <tr><td>Nombre:</td><td><input type="text" name="Nombre"></td></tr>
        <tr><td>Apellido:</td><td><input type="text" name="Apellido"></td></tr>
        <tr><td>Calle:</td><td><input type="text" name="Calle"></td></tr>
        <tr><td>CP:</td><td><input type="text" name="CP"></td></tr>
        <tr><td>Localidad:</td><td><input type="text" name="Localidad"></td></tr>
        <tr><td>Tel:</td><td><input type="text" name="Tel"></td></tr>
        <tr><td>Móvil:</td><td><input type="text" name="Movil"></td></tr>
        <tr><td>E-mail:</td><td><input type="text" name="Mail"></td></tr>
        <tr><td>Website:</td><td><input type="text" name="Website"></td></tr>
        <tr><td>Categoría:</td><td><select name="Categoria"><?php echo $campocat; ?></select></td></tr>
        <tr><td>Notas:</td><td><textarea cols="60" rows="4" name="Notas"></textarea></td></tr>
        <tr><td><input type="submit" value="Introducir datos" name="submit"></td></tr>
    </table>
</form>
</body>
</html>