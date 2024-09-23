<h3 class="px-5 mb-3">Tabla condicional 2</h3>
<?php 
    function muestra($valor) {
        // Alterna el color del texto según el valor
        $color = ($valor < 0) ? "red" : "#00A8FF";
        
        echo "<td style='color:$color;'>". number_format($valor, 5) ."</td>\n"; 
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
                $nrenglon = 0; // Inicializa el contador de filas
                // Al utilizar table-striped no es necesario el nrenglon
                
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