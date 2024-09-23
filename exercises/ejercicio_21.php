<h3>Bucle While</h3> 
<?php 
    /* Mostraremos el uso de la sentencia While y comenzamos a usar entrada 
    del teclado mediante un formulario simple */ 
    if (isset($_POST['number'])) { 
        $number = $_POST['number']; 
        $counter = 1; 
        while ($counter <= $number) { 
            echo "Los bucles son faciles!<br>\n"; 
            $counter++; 
        } 
        echo "Se acabo.\n"; 
    }
?>

<div class="container p-2">
    <a href="exercises/ejercicio_21.html">
        <button class="btn btn-outline-light">Ir al ejercicio</button>
    </a>
</div>