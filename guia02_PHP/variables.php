<?php
echo "<hr>";
$nombre = "Juan";   // String
$edad = 25;         // int
$estado = true;     // bool
$peso = 65.5;       // double

// Operador ternario
$estadoTxt = ($estado)?"Activo":"Inactivo";
//$estadoTxt = (!$estado)?"Inactivo":"Activo";
$output = <<<OUT
    Nombre: $nombre.<br>
    Edad: $edad.<br>
    Estado: $estadoTxt.<br>
    Peso: $peso.
OUT;
echo $output;
echo "<br><hr>";

$estaLloviendo = true;
//$clima = ($estaLloviendo)?"Esta lloviendo":"Hace sol";
$clima = (!$estaLloviendo)?"Hace sol":"Esta lloviendo";
echo "Clima: $clima";

//Arrays (Listas)
echo "<br><hr>";
//Array escalar (índices numericos desde cero)
$arrayFrutas = ["Mango","Pera","Piña","Kiwi"];
echo $arrayFrutas[2];

//Array asociativo
echo "<br><hr>";
$arrayUsuario =
["nombre"=>"Juan","email"=>"j@gmail.com","edad"=>20,"estado"=>true];
echo "Edad: ".$arrayUsuario["edad"];

echo "<br><hr>";
$arrayMultiple =
["nombre"=>"Ana","email"=>"ana@gmail.com","edad"=>25,"estado"=>true,365,"SENA",$arrayUsuario,"frutas"=>$arrayFrutas,9];
echo "Nombre: ".$arrayMultiple["nombre"];
echo "<br>Email: ".$arrayMultiple["email"];
echo "<br>Edad: ".$arrayMultiple["edad"];
echo "<br>Estado: ".$arrayMultiple["estado"];
echo "<br>Dias del año: ".$arrayMultiple[0];
echo "<br>Mejor Institucion Colombiana: ".$arrayMultiple[1];
echo "<br>Fruta: ".$arrayMultiple["frutas"][1];
echo "<br>Usuario Array: ".$arrayMultiple[2]["nombre"];
echo "<br>Hoy es: ".$arrayMultiple[3];
echo "<hr>";