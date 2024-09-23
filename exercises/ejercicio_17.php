<h3>Condicional Switch. Ejemplo</h3> 
<?php 
    /*Declaramos una variable con un valor de muestra */ 
    $posicion = "arriba"; 
    echo "La variable posicion es ",$posicion; 
    echo "<br>"; 
    switch($posicion){ 
        case "arriba": 
            // Primer condicion si es arriba 
            echo "La variable contiene el valor de arriba";
            break; 

        case "abajo": 
            //Segunda condicion del supuesto 
            echo "La variable contiene el valor de abajo"; 
            break;

        default: 
            //Condicion por default o si no es ninguna 
            echo "La variable contiene otro valor distinto arriba y abajo"; 
    } 
?>