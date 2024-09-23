<html> 
<head> 
  <title>EJERCICIO 3_1: ANALISIS DE FORMULARIO</title> 
</head> 
<body> 
<h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO V.2</h1><br> 
<br> 

<?php 
  if($_POST['gender'] == 0) { 
     echo "Hola Sr. "; 
  } else { 
     echo "Hola Sra. "; 
  } 
 
  echo "<b>{$_POST['lastname']}</b>, encantado de saludarte."; 
?> 
</body> 
</html> 