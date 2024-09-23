<?php

$archivo=fopen("ejercicio_31resultados.txt","r");


if($archivo){
    while(($datos = fgetcsv($archivo,100,",")) !== FALSE){
     $voto1=$datos[0];
     $voto2=$datos[1];
     $voto3=$datos[2];
    echo "Excelente, he aprendido mucho. obtuvo ". $voto1." Voto(s) <br /> <br />" ; 
    echo "Mas o menos, es muy complicado. obtuvo ".$voto2." Voto(s) <br /> <br />" ;
    echo "¡Bah! para que quiero aprender php ".$voto3. " Voto(s) <br /> <br />"  ;

    }
    fclose($archivo);
}



?>
