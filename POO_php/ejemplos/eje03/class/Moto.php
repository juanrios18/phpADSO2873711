<?php
require_once 'Vehiculo.php';
class Moto extends Vehiculo{
    public function __construct($motorEncendido = null, $cantidadRuedas = null, $marca = null) {
        // Se llama el constructor del padre
        parent::__construct($motorEncendido, $cantidadRuedas, $marca);
    }
}
