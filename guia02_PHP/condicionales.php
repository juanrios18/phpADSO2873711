<?php
echo "<hr>";
$aleatorio = rand(1,100);
echo "El número aleatorio es: $aleatorio<br>";
if($aleatorio > 50){
    echo "El número es mayor o igual a 50";
}else{
    echo "El número es menor a 50";
}
/*Generar un valor aleatorio entre 1 y 999. Luego msotrar si tiene 1,2 o 3 digitos */
echo "<hr>";
$valor = rand(1,999);
echo "El valor aleatorio es: $valor.<br>";
if($valor<10){
    echo "Tiene 1 digito";
}elseif($valor<100) {
        echo "Tiene 2 digitos.";
}else {
    echo "Tiene 3 digitos.";
}
echo "<hr>";