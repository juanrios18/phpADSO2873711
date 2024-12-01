<?php
    class Empleado{
        private $nombre;
        private $sueldo;
        private $email;
        private $fechaNacimiento;
        private $peso;
        private $altura;

        public function __construct($nombre = null, $sueldo = null, $email = null, $fechaNacimiento = null, $peso = null, $altura = null) {
            echo "<br>Se crea el objeto persona</br>";
            $this->$nombre = $nombre;
            $this->$sueldo = $sueldo;
            $this->$email = $email;
            $this->$fechaNacimiento = $fechaNacimiento;
            $this->$peso = $peso;
            $this->$altura = $altura;
        }

        public function datosCom($nombre, $sueldo){
            echo "<br> El nombre del empleado es: $nombre</br>";
            if ($this->impuestos($this->$sueldo)) {
                echo "<br>Debe pagar impuestos</br>";
            }else {
                echo "<br>No debe pagar impuestos</br>";
            }
        }

        private function impuestos($sueldo) {
            return $sueldo > 2000000;
        }

        private function edad($fechaNacimiento) {
            $anioActual = date("Y");
            $edad = $anioActual - $fechaNacimiento("Y");

            if ($edad >= 18) {
                echo "<br>Puede votar</br>";
            } else {
                echo "<br>No puede votar</br>";
            }
        }
    }
?>