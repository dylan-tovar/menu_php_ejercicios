<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
<?php 
$conexion=mysqli_connect("localhost","root","") or 
  die("Problemas en la conexion"); 
mysqli_select_db($conexion, "phpfacil") or 
  die("Problemas en la selección de la base de datos"); 
$registros=mysqli_query($conexion, "select codigo,nombrecur from cursos") or 
  die("Problemas en el select:".mysqli_error($conexion)); 
?> 
<form action="ejercicio_43_2.php" method="post"> 
Ingrese nombre: 
<input type="text" name="nombre"><br> 
Ingrese mail: 
<input type="text" name="mail"><br> 
Seleccione el curso: 
<select name="codigocurso"> 
<?php 
while ($reg=mysqli_fetch_array($registros)) 
{ 
  echo "<option value=\"$reg[codigo]\">$reg[nombrecur]</option>"; 
} 
?> 
</select> 
<br> 
<input type="submit" value="Registrar"> 
</form> 
</body> 
</html>