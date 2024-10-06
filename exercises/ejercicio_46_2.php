<?php
// Conecta a la base de datos
$conexion = mysqli_connect("localhost", "root", "") or die("Problemas en la conexión");
mysqli_select_db($conexion, "phpfacil") or die("Problemas en la selección de la base de datos");

// Realiza la consulta SQL
$mail = $_POST['mail']; // Recibe el mail ingresado por el usuario
$registros = mysqli_query($conexion, "SELECT * FROM alumnos WHERE mail = '$mail'") or die("Problemas en el select:".mysqli_error($conexion));

// Verifica si hay resultados
if ($registros->num_rows > 0) {
    // Obtiene el primer resultado
    $regalu = mysqli_fetch_array($registros);

    // Muestra el formulario
    ?>
    <form action="ejercicio_46_3.php" method="post">
        <label>Correo:</label>
        <input type="text" name="mail" value="<?php echo $regalu['mail']; ?>" readonly><br>
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $regalu['nombre']; ?>" readonly><br>
        <label>Curso:</label>
        <select name="codigocurso">
            <?php
            mysqli_data_seek($registros, 0); // Reset the pointer
            while ($reg = mysqli_fetch_array($registros)) {
                if ($regalu['codigocurso'] == $reg['codigo']) {
                    echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecur]</option>";
                } else {
                    echo "<option value=\"$reg[codigo]\">$reg[nombrecur]</option>";
                }
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Modificar">
    </form>
    <?php
} else {
    echo "No existe alumno con dicho mail";
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>