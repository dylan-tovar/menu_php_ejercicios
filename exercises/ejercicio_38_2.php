<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
<?php 
$conexion=mysqli_connect("localhost","root","")  
  or die("Problemas en la conexion"); 
mysqli_select_db($conexion, "phpfacil") or 
  die("Problemas en la seleccion de la base de datos"); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
  $mail = mysqli_real_escape_string($conexion, $_POST["mail"]);
  $codigocurso = mysqli_real_escape_string($conexion, $_POST["codigocurso"]);
  $sql = "INSERT INTO alumnos (nombre, mail, codigocurso) VALUES ('$nombre', '$mail', '$codigocurso')";
  if (mysqli_query($conexion, $sql)) {
    echo "El alumno fue dado de alta.";
  } else {
    echo "Problemas en el select: " . mysqli_error($conexion);
  }
}
mysqli_close($conexion); 
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" id="nombre"><br><br>
  <label for="mail">Correo electrónico:</label>
  <input type="email" name="mail" id="mail"><br><br>
  <label for="codigocurso">Código del curso:</label>
  <input type="number" name="codigocurso" id="codigocurso"><br><br>
  <input type="submit" value="Enviar">
</form>
</body> 
</html>