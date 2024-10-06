<?php
$dp = mysqli_connect("localhost", "root", "");
if (!$dp) {
    die("<p>No se ha podido establecer la conexión con MySQL.</p>");
}

if (!mysqli_select_db($dp, "agenda")) {
    die("<p>No se ha podido establecer la conexión con la base de datos.</p>");
}
?>
ejercicio_37_1.php

php

Verify

Open In Editor
Edit
Copy code
<html>
<head>
  <title></title>
</head>
<body>
<h3>Introducir direcciones</h3>
<?php
include("ejercicio_37acceso.inc.php");
if (isset($_POST['submit'])) {
   if (empty($_POST['Nombre'])) {
      echo "<p>Introduzca el <b>nombre</b>.</p>";
   } else if (strlen($_POST['Apellido']) < 3) {
      echo "<p>El apellido debe tener como minimo <b>3</b> caracteres.</p>";
   } else {
      $sql = "INSERT INTO direcciones (Tratamiento, Nombre, Apellido, Calle, CP, Localidad, Tel, Movil, Mail, Website, Categoria, Notas) VALUES ('".$_POST['Tratamiento']."','".$_POST['Nombre']."','".$_POST['Apellido']."','".$_POST['Calle']."','".$_POST['CP']."','".$_POST['Localidad']."','".$_POST['Tel']."','".$_POST['Movil']."','".$_POST['Mail']."','".$_POST['Website']."','".$_POST['Categoria']."','".$_POST['Notas']."')";
      $resultado = mysqli_query($dp, $sql);
      if ($resultado) {
         echo "<p> Datos agregados con exito.</p>";
      } else {
         echo "<p>Datos <b>no</b> agregados.</p>";
         echo "Error: ".mysqli_error($dp);
      }
   }
   echo "[ <a href='javascript:history.back()>Volver</a> ] - [ <a href='".$_SERVER['PHP_SELF']."'> Introducir nueva fila</a>]";
} else {
     $sql2 = "SELECT * FROM categorias";
     $resultado2 = mysqli_query($dp, $sql2);
     $campocat = "";
     while ($row = mysqli_fetch_assoc($resultado2)) {
        $campocat .= "<option value='".$row['Categoria']."'>".$row['Categoria']."</option>\n";
     }
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <table>
   <tr><td>Tratamiento:</td><td><select name="Tratamiento">
   <option>Sr.</option>
   <option>Sra.</option>
   </select></td></tr>
   <tr><td> Nombre:</td><td><input type="text" name="Nombre"></td></tr>
   <tr><td> Apellido:</td><td><input type="text" name="Apellido"></td></tr>
   <tr><td> Calle:</td><td><input type="text" name="Calle"></td></tr>
   <tr><td> CP:</td><td><input type="text" name="CP"></td></tr>
   <tr><td> Localidad:</td><td><input type="text" name="Localidad"></td></tr>
   <tr><td> Tel:</td><td><input type="text" name="Tel"></td></tr>
   <tr><td> Movil:</td><td><input type="text" name="Movil"></td></tr>
   <tr><td> E-mail:</td><td><input type="text" name="Mail"></td></tr>
   <tr><td> Website:</td><td><input type="text" name="Website"></td></tr>
   <tr><td> Categoria:</td><td><select name="Categoria"><?php echo $campocat; ?></select></td></tr>
   <tr><td> Notas:</td><td><textarea cols="60" rows="4" name="Notas"></textarea></td></
