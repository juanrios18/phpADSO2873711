<?php
require_once 'connection.php';

$id = 1;
$nombre = "Anastacia";
$email = "anastacia@gmail.com";
$pass = 1234;
$peso = 49;
$cantHijos = 1;
// 1. Se prepara la consulta
$sqlPDO = $dbPDO->prepare("UPDATE personas SET nombre=:nombre, email=:email, contrasenia=:pass, peso=:peso, cantidadHijos=:cantHijos WHERE id=:id");
// 2. BIND de los datos
$sqlPDO->bindParam(":nombre", $nombre);
$sqlPDO->bindParam(":email", $email);
$sqlPDO->bindParam(":pass", $pass);
$sqlPDO->bindParam(":peso", $peso);
$sqlPDO->bindParam(":cantHijos", $cantHijos);
$sqlPDO->bindParam(":id", $id);
// 3. Ejecutamos la consulta
$sqlPDO->execute();
header("Location:viewPDO.php");