<?php
require_once 'Vehiculo.php';
class Auto extends Vehiculo{ // Se hereda de la clase vehiculo
    private $cantidadPuertas;

    public function __construct($cantidadPuertas=null,$motorEncendido = null, $cantidadRuedas = null, $marca = null)
    {
        $this->cantidadPuertas = $cantidadPuertas;
        // Se llama el constructor de la clase padre
        parent::__construct($motorEncendido, $cantidadRuedas, $marca);
    }
    public function setCantidadPuertas($cantidadPuertas){
        $this->cantidadPuertas = $cantidadPuertas;
    }
    public function getCantidadPuertas(){
        return $this->cantidadPuertas;
    }
}
