<?php
require_once 'connection.php';

// $id = intval($_GET['id'] ?? -1)
$id = 6;

// 1. Preparamos la consulta
$sqlPDO = $dbPDO->prepare("DELETE FROM personas WHERE id=:id");
// 2. Asignamos variables
$sqlPDO->bindParam(":id", $id, PDO::PARAM_INT);
// 3. Ejecutamos la consulta
$sqlPDO->execute();
header("Location:viewPDO.php");