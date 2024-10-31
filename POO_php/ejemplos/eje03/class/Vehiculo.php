<?php
class Vehiculo{
    // Atributos
    private $motorEncendido = false;
    private $cantidadRuedas;
    private $marca;

    public function __construct($motorEncendido = null, $cantidadRuedas = null, $marca = null)
    {
        $this->motorEncendido = $motorEncendido;
        $this->cantidadRuedas = $cantidadRuedas;
        $this->marca = $marca;
    }

    public function encenderMotor()
    {
        $this->motorEncendido = true;
    }

    public function apagarMotor()
    {
        $this->motorEncendido = false;
    }

    public function arrancar()
    {
        if ($this->motorEncendido) {
            echo "El auto arranca.<br>";
        } else {
            echo "Primero debe encender el vehículo.<br>";
        }
    }
    public function setMotorEncendido($motorEncendido){
        $this->motorEncendido = $motorEncendido;
    }
    public function getMotorEncendido(){
        return $this->motorEncendido;
    }
    public function setCantidadRuedas($cantidadRuedas){
        $this->cantidadRuedas = $cantidadRuedas;
    }
    public function getCantidadRuedas(){
        return $this->cantidadRuedas;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }
}
