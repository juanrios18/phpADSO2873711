<?php
require_once 'class/Moto.php';
require_once 'class/Auto.php';

$moto1 = new Moto(false, 2, "Suzuki"); // Crear un objeto moto
$moto1->arrancar();
$moto1->encenderMotor();
$moto1->arrancar();
/********************************************************** */
$cantRuedas = 4;
$motorEncendido = true;
$cantPuertas = 2;
$marca = 'Mini Cooper';
echo "<hr>";
$auto1 = new Auto($cantPuertas,$motorEncendido,$cantRuedas,$marca);
$auto1->arrancar();
$auto1->apagarMotor();
$auto1->arrancar();
echo "<br>Cantidad puertas: ".$auto1->getCantidadPuertas();
echo "<br>Marca: ".$auto1->getMarca();
