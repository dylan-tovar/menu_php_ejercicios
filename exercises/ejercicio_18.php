<h3 class="px-5 mb-3">Tabla condicional 1</h3> 
<?php 
    /* Crearemos una tabla de valores de seno y coseno de 0 a 2 
    en incrementos de 0.01. Los valores negativos que resulten los queremos 
    mostrar en rojo, y los valores positivos en azul */ 
    function muestra($valor) { 
        if ($valor < 0) {
            $color = "red"; 
        } else {
            $color = "#00A8FF"; 
        }
        // Se formatean los valores a 5 decimales
        echo "<td style='color:$color;'>". number_format($valor, 5) ."</td>\n"; 
    }
?> 

<div class="container">
    <table class="table table-dark table-striped table-bordered text-center"> 
        <thead class="thead-light">
            <tr>
                <th scope="col">x</th>
                <th scope="col">sin(x)</th>
                <th scope="col">cos(x)</th>
            </tr>
        </thead>
        <tbody>
            <?php    
                for ($x = 0; $x <= 2; $x += 0.01) { 
                    echo "<tr>"; 
                    muestra($x); 
                    muestra(sin($x)); 
                    muestra(cos($x)); 
                    echo "</tr>"; 
                } 
            ?>
        </tbody>
    </table>
</div>