<?php
//Se incluye el archivo Persona.php una sola vez
require_once('class/persona.php');
$person1 = new Persona(); // Se crea el objeto persona
// Setteamos los atributos
$person1->nombre = 'Ana';
$person1->email = 'Ana@gmail.com';
$person1->edad = 25;

// Mostrar los resultados
//echo "Su nombre es ".$persona1->nombre;
//print("<br>Su email es: ".$persona1->email);
//echo <<<TEST
//  <br>Su edad es $persona1->edad
//TEST;
$person1->saludar();
/************************************************** */
$person2 = new Persona("Paco","paco@gmail.com",20);
$person2->saludar();