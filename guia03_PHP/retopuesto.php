<?php
//Mostrar la tabla de multiplicar del 2. Emplea el for, luego el while y por último el do/while.
//La estructura for permite incrementa una variable de 2 en 2:
echo "<hr>";
echo "Tabla de multiplicar con for: <br>";
for ($i=1; $i <= 10; $i++) { 
    echo "2 x $i = ". (2*$i)."<br>";
}
echo "<hr>";
/*************************************** */
echo "Tabla de multiplicar con while: <br>";
$i = 1;
while ($i <= 10) {
    echo "2 x $i = ". (2*$i)."<br>";
    $i++;
}
echo "<hr>";
/*************************************** */
echo "Tabla de multiplicar con do/while: <br>";
$i = 1;
do {
    echo "2 x $i = ". (2*$i)."<br>";
    $i++;
} while ($i <= 10);
echo "<hr>";