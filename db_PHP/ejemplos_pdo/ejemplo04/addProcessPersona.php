<?php
require_once 'connection.php';

$nombre = $_POST['txtNombre'] ?? "";
$email = $_POST['txtEmail'] ?? "";
$password = $_POST['txtPassword'] ?? "";
$peso = $_POST['txtPeso'] ?? "";
$cantHijos = $_POST['txtCantHijos'] ?? "";

$sqlPDO = $dbPDO->prepare("INSERT INTO personas (nombre,email,contrasenia,peso,cantidadHijos) VALUES (:nombre, :email, :pass, :peso, :cantHijos)");
$sqlPDO->bindParam(":nombre", $nombre, PDO::PARAM_STR);
$sqlPDO->bindParam(":email", $email, PDO::PARAM_STR);
$sqlPDO->bindParam(":pass", $password, PDO::PARAM_STR);
$sqlPDO->bindParam(":peso", $peso);
$sqlPDO->bindParam(":cantHijos", $cantHijos, PDO::PARAM_INT);

$sqlPDO->execute();
header("Location:viewPersonas.php");