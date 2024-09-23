<h3 class="px-5 mb-3 text-light">Tabla condicional 3</h3> 
<?php 
    /* Creamos una tabla de valores de seno y coseno de 0 a 2 
    en incrementos de 0.05. Los valores negativos se muestran en rojo, 
    y los positivos en azul. Además, alternamos los colores de fondo de las filas. */
    
    function muestra($valor) {
        global $nrenglon;
        
        $fondo = ($nrenglon % 2) ? "#ffff00" : "#ffffff";
        $color = ($valor < 0) ? "red" : "#00A8FF"; 
        
        echo "<td class='$fondo' style='color:$color; text-align:center;'>". number_format($valor, 5) ."</td>\n"; 
    }
?> 

<div class="container">
    <table class="table table-dark table-striped table-bordered text-center">
        <thead class="thead-light">
            <tr>
                <th>x</th>
                <th>sin(x)</th>
                <th>cos(x)</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $nrenglon = 0; 
                for ($x = 0; $x <= 2; $x += 0.05) { 
                    echo "<tr>"; 
                    muestra($x);      
                    muestra(sin($x)); 
                    muestra(cos($x)); 
                    echo "</tr>"; 
                    $nrenglon++; 
                } 
            ?>
        </tbody>
    </table>
</div>