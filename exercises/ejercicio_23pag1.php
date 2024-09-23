<?php
// Para depurar errores en PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<html> 
    <head> 
        <title>Ejemplo Página 1 Librería</title> 
    </head> 
    <body> 
        <?php include("ejercicio_23.phtml"); ?> 
        <?php CabeceraPagina(); ?>

        <p>Página 1</p>
        <br><br><br><br><br> 
        <p>Contenido blalbl blalb alb</p><br><br> 
        <p>Más cosas...</p><br><br> 
        <p>Fin</p><br><br> 

        <?php PiePagina(); ?> 
    </body> 
</html>