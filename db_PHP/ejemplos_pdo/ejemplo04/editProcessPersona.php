<?php
require_once 'connection.php';

$id = intval($_POST['txtId'] ?? -1);
$nombre = $_POST['txtNombre'] ?? "";
$email = $_POST['txtEmail'] ?? "";
$password = $_POST['txtPassword'] ?? "";
$peso = $_POST['txtPeso'] ?? "";
$cantHijos = $_POST['txtCantHijos'] ?? "";

$sqlPDO = $dbPDO->prepare("UPDATE personas SET nombre = :nombre, email = :email, contrasenia = :pass, peso = :peso, cantidadHijos = :cantHijos WHERE id = :id");

$sqlPDO->bindParam(":id", $id, PDO::PARAM_INT);
$sqlPDO->bindParam(":nombre", $nombre, PDO::PARAM_STR);
$sqlPDO->bindParam(":email", $email, PDO::PARAM_STR);
$sqlPDO->bindParam(":pass", $password, PDO::PARAM_STR);
$sqlPDO->bindParam(":peso", $peso);
$sqlPDO->bindParam(":cantHijos", $cantHijos, PDO::PARAM_INT);

$sqlPDO->execute();

header("Location:viewPersonas.php");