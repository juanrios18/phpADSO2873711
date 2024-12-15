<?php

namespace App\Models;

use PDO;
use PDOException;

// Se crea una clase abstracta la cual no puede ser instanciada
abstract class BaseModel{
    protected $dbConnection; // Contiene la conexion a la base de datos.
    protected $table; // Representa la tabla actual

    public function __construct()
    {
        $dbConfig = require_once MAIN_APP_ROUTE . "/../congif/database.php";
        try {
            $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']}";
            $username = $dbConfig['username'];
            $password = $dbConfig['password'];
            $this->dbConnection = new PDO($dsn, $username, $password);
        } catch (PDOException $exc) {
            die('Error en la conexión'. $exc->getMessage());
        }
    }

    public function getAll():array
    {
        try {
            $query = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->query($query);
            $statement->bindParam(":id",$id);
            //Obtener los resultados como un array asociativo
            $resultSet = $statement->fetchAll(PDO::FETCH_OBJ);
            // Se devuelve el array con los registros de la BD
            return $resultSet;
        } catch (PDOException $exc) {
            die('Error en la conexión'. $exc->getMessage());
        }    
    }
    // Acá van los demás métodos que sean generales a todos los modelos
}