<h3>Calculos, redondeo y formato. </h3> 
<?php 
/* Primero declaramos las variables */ 
$precioneto = 101.98; 
$iva = 0.196; 
$resultado = $precioneto * $iva; 
echo "El precio es de "; 
echo $precioneto; 
echo " y el IVA el "; 
echo $iva; 
echo "% <br>"; 
echo "Resultado: " ; 
echo round($resultado,2); 
echo " con ROUND() <br>"; 
echo $resultado; 
echo " normal \n"; 
echo "<br><br>"; 
$resultado2 = sprintf("%01.2f", $resultado); 
echo "Usando la funcion SPRINTF se ve asi: "; 
echo $resultado2 
?>