<?php
require_once 'config.php';
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