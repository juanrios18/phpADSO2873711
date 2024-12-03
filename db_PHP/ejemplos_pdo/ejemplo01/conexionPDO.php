<?php
//objeto de conexion con PDO
try {
    $dbPDO = NEW PDO("mysql:host=localhost;dbname=presonasCPIC", "root", "");
    $dbPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo  $exception->getMessage();
    die();
    //throw  $exception;
}
?>