<html> 
    <head> 
        <title>MySQL 02 - Consulta BD con tabla (Agenda)</title> 
    </head> 
    <body> 
        <h1>MySQL 02 - Consulta BD con tabla (Agenda)</h1> 
        <?php 
            $dp = mysqli_connect("localhost", "root", "", "Agenda"); 
            $sql = "SELECT * FROM direcciones" ; 
            $resultado = $dp->query($sql); 

            if ($resultado->num_rows > 0) {
                $campos = $resultado->field_count;
                $filas = $resultado->num_rows;

                echo "<p>Cantidad de filas: $filas</p>\n";

                echo "<table border='1' cellspacing='0'>\n";
                echo "<tr>";
                
                $columnas = $resultado->fetch_fields();
                foreach ($columnas as $columna) {
                  echo "<th>{$columna->name}</th>";
                }
                  
                echo "</tr>\n";
                
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr>"; 
                    foreach ($row as $value) { 
                        echo "<td>$value&nbsp;</td>";
                    } 
                    echo "</tr>\n";
                }
             echo "</table>";   
            }
        ?> 
    </body> 
</html>