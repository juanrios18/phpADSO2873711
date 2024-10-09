<?php
$fechaActual = date("d-m-Y");
echo "Fecha Actual> $fechaActual";
echo "<br>";
echo 'Fecha Actual> $fechaActual';
echo "<br>";
echo 'Fecha Actual> $fechaActual> '.$fechaActual;
$dia = date("d");
$mes = date("m");
$year = date("Y");
print("<br>Fecha: $dia<br>");
print("Mes: $mes<br>");
print("Año: $year<br>");

echo "<br>";
if($dia <= 10){
    echo "El sitio esta disponible";
}else{
    echo "El sitio temporalmente fuera de servicio";
}
echo "<br>";
echo "<br>";
print("Variables Diferentes=");
$zonaHoraria = date("Z");
$segEpocaUnix = date("U");
$idenZonaHoraria = date("e");
$diasMes = date("t");
print("<br>Zona horaria en segundos: $zonaHoraria<br>");
print("Segundos desde la Época Unix: $segEpocaUnix seg<br>");
print("Identificador de la Zona Horaria: $idenZonaHoraria<br>");
print("Número de días del mes dado: $diasMes<br>");
?>