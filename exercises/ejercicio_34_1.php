<html> 
    <head> 
        <title>MySQL 01 - Consulta a BD (Agenda)</title> 
    </head> 
    <body> 
        <h1>Mostrar Nombres de la Agenda. BD </h1> 
        <?php 
            $dp = mysqli_connect("localhost", "root", "", "Agenda"); 
            $sql = "SELECT * FROM direcciones" ; 
            $resultado = $dp->query($sql);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    echo $row['nombre'] . " " . $row['apellido'] . "<br>\n";
                }
            } else {
                echo "no se encontraron resultados";
            }
            
            $dp->close();
        ?> 
    </body> 
</html>