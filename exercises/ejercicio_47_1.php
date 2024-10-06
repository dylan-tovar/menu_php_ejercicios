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
  $registros = mysqli_query($conexion, "SELECT COUNT(alu.codigo) AS cantidad, cur.nombrecur FROM alumnos AS alu INNER JOIN cursos AS cur ON cur.codigo = alu.codigocurso GROUP BY alu.codigocurso, cur.nombrecur")
   or  die("Problemas en el select:".mysqli_error($conexion)); 
while ($reg=mysqli_fetch_array($registros)) 
{ 
  echo "Nombre del curso: ".$reg['nombrecur']."<br>"; 
  echo "Cantidad de inscriptos: ".$reg['cantidad']."<br>"; 
  echo "<hr>"; 
} 
mysqli_close($conexion); 
?> 
</body> 
</html> 