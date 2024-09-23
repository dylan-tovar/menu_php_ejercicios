<?php
// Para depurar errores en PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<html> 
    <head> 
        <title>Ejemplo Página 2 Librería</title> 
    </head> 
    <body> 
        <?php include("ejercicio_23.phtml"); ?> 
        <?php CabeceraPagina(); ?> 
        
        <p>Esta es otra página</p><br><br> 
        <p>Completamente distinta</p><br><br> 
        <p>Pero comparte el pie y la cabecera con la otra.</p><br><br> 
        
        <?php PiePagina(); ?>
    </body> 
</html>