<?php
require_once 'connection.php';

try {
    $nombre = "Paco";
    $email = "paco@gmail.com";
    $contrasenia = "1234";
    $peso = 90;
    $cantidadHijos = 2;
    // 1. se prepara la consulta
    $sqlPDO = $dbPDO->prepare("INSERT INTO personas (nombre, email, contrasenia, peso, cantidadHijos) VALUES (:nombre,:email,:pass,:peso,:cantHijos)");
    // 2. se asignan las variables -BIND
    $sqlPDO->bindparam(":nombre", $nombre, PDO::PARAM_STR);
    $sqlPDO->bindparam(":email", $email, PDO::PARAM_STR);
    $sqlPDO->bindparam(":pass", $contrasenia, PDO::PARAM_STR);
    $sqlPDO->bindparam(":peso", $peso);
    $sqlPDO->bindparam(":cantHijos", $cantidadHijos, PDO::PARAM_INT);
    // 3. se ejecuta la consulta
    if ($sqlPDO->execute()) {
        echo "Persona ingresada con exito!!!";
    } else {
        echo "Error al ingresar la persona";
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}