<?php
$mes = $_REQUEST['mes'];
$dia = $_REQUEST['dia'];
$anio = $_REQUEST['anio'];

if (checkdate($mes, $dia, $anio)) {
    echo "La fecha ingresada es correcta";
} else {
    echo "La fecha no es válida";
}
?>