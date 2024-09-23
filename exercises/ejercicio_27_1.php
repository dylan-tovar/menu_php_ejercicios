<?php 
 
if (isset($_POST['pw'])) { 
  $pw = $_POST['pw']; 
  if ($pw == "magic") { 
     header ("Location: ejercicio_27page1.php"); 
  } elseif ($pw == "abracadabra" ){ 
     header ("Location: ejercicio_27page2.php"); 
  } else { 
     header ("Location: ejercicio_27sorry.php"); 
  } 
} 
 
?> 
 
<html> 
 
<head> 
  <title>Ejemplo de password y header</title> 
</head> 
 
<body> 
<h1> Ejemplo de password y funcion header </h1> 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
<input type="text" name="pw">
<input type="submit" value="Envialo"> 
</form> 
 
</body> 
 
</html> 