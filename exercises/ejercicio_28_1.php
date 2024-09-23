<html> 
<head> 
<title> un pequeño mailer para recopilar la opiniòn </title> 
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" > 
</head> 
<body> 
<h1>Feedback-Mailer</h1> 
<p>¡Enviame un e-mail!</p> 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
Tu direcciòn de e-mail: <br> 
<input type="text" name="Mail" ><br> 
Tu comentario: <br> 
<textarea name="message" cols="50" rows="5"> 
</textarea><br> 
<input type="submit" value="Enviar"> 
</form> 
<?php 
$receiverMail = "deiby.corro@hotmail.com"; // escribe aqui tu direcciòn 
if (isset($_POST['Mail']) && $_POST['Mail'] != "") { 
 if (mail ($receivermail, "¡Tienes correo nuevo!", $_POST['message'], "From: 
 $_POST[Mail]")) { 
  echo "<p>Gracias por enviarme tu opiniòn.</p>\n"; 
 } else { 
  echo "<p>Lo siento, ha ocurrido un error.</p>\n"; 
 } 
} 
?> 
</body> 
</html>