<?php

define("DRIVER", "mysql");
define("HOST", "localhost");
define("Db_NAME", "personascpic");
define("DB_USER", "root");
define("BD_PASSWORD", "");

//OBJETO DE CONEXION CON PDO
try {
    $dsn = DRIVER . ":host=" . HOST . ";dbname=" . Db_NAME;
    $dbPDO = new PDO($dsn, "root", "");
    $dbPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo  $exception->getMessage();
    die();
    //throw $exception;
}

try {
    $nombre = "Juan";
    $email = "juan@gmail.com";
    $contrasenia = "123";
    $peso = 60.5;
    $cantidadHijos = 0;
    // 1. se prepara la consulta
    $sqlPDO = $dbPDO->prepare("INSERT INTO personas (nombre, email, contrasenia, peso, cantidadHijos) VALUES (?, ?, ?, ?, ?)");
    // 2. se asignan las variables -BIND
    $sqlPDO->bindparam(1, $nombre);
    $sqlPDO->bindparam(2, $email);
    $sqlPDO->bindparam(3, $contrasenia);
    $sqlPDO->bindparam(4, $peso);
    $sqlPDO->bindparam(5, $cantidadHijos);
    // 3. se ejecuta la consulta
    if ($sqlPDO->execute()) {
        echo "Persona ingresada con exito!!!";
    } else {
        echo "Error al ingresar la persona";
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}