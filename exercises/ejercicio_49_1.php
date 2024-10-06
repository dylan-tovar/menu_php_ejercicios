<?php 
if (isset($_REQUEST['pos'])) 
  $inicio=$_REQUEST['pos']; 
else 
  $inicio=0; 
?> 
<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
<?php 
$conexion=mysqli_connect("localhost","root","") or 
  die("Problemas en la conexion"); 
mysqli_select_db($conexion, "phpfacil") or 
  die("Problemas en la selección de la base de datos");  // o $_POST['inicio'], dependiendo de cómo estés enviando el valor
$registros = mysqli_query($conexion, "SELECT alu.codigo AS codigo, nombre, mail, codigocurso, cur.nombrecur 
                                      FROM alumnos AS alu 
                                      INNER JOIN cursos AS cur ON cur.codigo = alu.codigocurso 
                                      LIMIT $inicio, 2") or 
  die("Problemas en el select:".mysqli_error($conexion)); 
$impresos=0; 
while ($reg=mysqli_fetch_array($registros)) 
{ 
  $impresos++; 
  echo "Codigo:".$reg['codigo']."<br>"; 
  echo "Nombre:".$reg['nombre']."<br>"; 
  echo "Mail:".$reg['mail']."<br>"; 
  echo "Curso:".$reg['nombrecur']."<br>"; 
  echo "<hr>"; 
} 
mysqli_close($conexion); 
if ($inicio==0) 
echo "anteriores "; 
else 
{ 
  $anterior=$inicio-2; 
  echo "<a href=\"ejercicio_49_1.php?pos=$anterior\">Anteriores </a>"; 
  echo " ";
} 
if ($impresos==2) 
{ 
  $proximo=$inicio+2; 
  echo "<a href=\"ejercicio_49_1.php?pos=$proximo\">   Siguientes</a>"; 
} 
else 
  echo "siguientes"; 
?> 
</body> 
</html>  
