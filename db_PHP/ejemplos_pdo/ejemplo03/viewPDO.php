<?php
require_once 'connection.php';

try {
    $sqlPDO = $dbPDO->prepare("SELECT * FROM personas");
    // Esquecificamos el metodo fetch mode para traer los datos
    $sqlPDO -> setFetchMode(PDO:: FETCH_OBJ); // Cada campo BD  pasa a ser un atributo
    // Ejecutamos la consulta
    $sqlPDO-> execute();
    // Mostramos los 
    while ($row = $sqlPDO->fetch()) {
        echo "Nombre: ".$row->nombre;
        echo "<br>Email: ".$row->email;
        echo "<br>Contraseña: ".$row->contrasenia;
        echo "<br>Peso: ".$row->peso;
        echo "<br>Cantidad de Hijos: ".$row->cantidadHijos;
        echo "<pre>"; print_r($row); echo "</pre>";
        echo "<hr>";
    }
} catch(PDOException $ex) {
    $ex->getMessage();
}