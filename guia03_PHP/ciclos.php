<?php
//Ciclo For
echo "<hr>";
for ($i=0; $i < 10; $i++) { 
    print("Número $i<br>");
}
echo "<hr>";
$arrayFrutas = ["Mango","Pera","Piña","Kiwi"];
for ($i=0; $i < count($arrayFrutas); $i++) { 
    echo $arrayFrutas[$i]."<br>";
}
echo "<hr>";
foreach ($arrayFrutas as $item) {
    echo $item."<br>";
}
echo "<hr>";
$arrayUsuario = ["nombre"=>"Juan","email"=>"j@gmail.com","edad"=>20,"estado"=>true];
foreach ($arrayUsuario as $clave => $valor) {
    echo "Clave: $clave -- Valor $valor <br>";
}
echo "<hr>";
/*********************************************** */
// Ciclo While
$valor = rand(1,100);
$inicio = 1;
echo "Valor generado: $valor<br>";
while($inicio<=$valor) {
    echo "$inicio<br>";
    $inicio++;
}
echo "<hr>";
/*********************************************** */
$dia = date("d");
$inicio = 1;
echo "Dia: $dia<br>";
do {
    echo "$inicio<br>";
    $inicio++;
} while ($inicio<=$dia);