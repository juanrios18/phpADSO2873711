<?php
setlocale(LC_TIME, "es_ES.UTF-8", "es_ES", "Spanish_Spain");
date_default_timezone_set('America/Bogota');
$diahoy = strftime("%A");
$meshoy = strftime("%B");
$dia = date("j");
$year = date("Y");
$horahoy = date("g:i:s");
$am = date("a");
print("Reto propuesto:<br>");
print("<br>Hola, hoy es $diahoy $dia de $meshoy de <br> $year y son las $horahoy $am");
?>