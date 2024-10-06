<html> 
<head> 
<title>Problema</title> 
</head> 
<body></body>
 
CUADERNO DE EJERCICIOS Y PRACTICAS  Página 91 
 
<?php 
$conexion=mysqli_connect("localhost","root","") or 
  die("Problemas en la conexion"); 
mysqli_select_db($conexion,"phpfacil") or 
  die("Problemas en la selección de la base de datos"); 

  $registros = mysqli_query($conexion, "
  SELECT 
      alu.codigo, 
      alu.nombre, 
      alu.mail, 
      alu.codigocurso, 
      DATE_FORMAT(alu.fechanac, '%Y-%m-%d') AS fechanac, 
      cur.nombrecur 
  FROM 
      alumnos AS alu 
  INNER JOIN 
      cursos AS cur 
  ON 
      cur.codigo = alu.codigocurso
") or die("Problemas en el select: " . mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros)) 
{ 
  echo "Codigo:".$reg['codigo']."<br>"; 
  echo "Nombre:".$reg['nombre']."<br>"; 
  echo "Mail:".$reg['mail']."<br>"; 
  echo "Fecha de Nacimiento: " . $reg['fechanac'] . "<br>";
  echo "Curso:".$reg['nombrecur']."<br>"; 
  echo "<hr>"; 
} 
mysqli_close($conexion); 
?> 
</body> 
</html>