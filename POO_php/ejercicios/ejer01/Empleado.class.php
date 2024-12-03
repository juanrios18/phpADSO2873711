<?php
class Empleado {
    private $nombre;
    private $sueldo;
    private $email;
    private $fechaNacimiento;
    private $peso;
    private $altura;

    public function __construct($nombre = null, $sueldo = null, $email = null, $fechaNacimiento = null, $peso = null, $altura = null) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->email = $email;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function datosCom() {
        echo "<div class='form-group'>";
        echo "<div class='strong-data'>Nombre del empleado:</div> $this->nombre.";
        echo "<div class='strong-data'>Sueldo del empleado:</div> $this->sueldo.";
        if ($this->impuestos($this->sueldo)) {
            echo "<div>-Debe pagar impuestos.</div>";
        } else {
            echo "<div>-No debe pagar impuestos.</div>";
        }
        $this->edad($this->fechaNacimiento);
        echo "</div>";
    }

    private function impuestos($sueldo) {
        return $sueldo > 2000000;
    }

    private function edad($fechaNacimiento) {
        $anioActual = date("Y");
        $edad = $anioActual - date("Y", strtotime($fechaNacimiento));

        echo "<div class='strong-data'>Edad del empleado:</div> $edad años.";
        if ($edad >= 18) {
            echo "<div>-Puede votar.</div>";
        } else {
            echo "<div>-No puede votar.</div>";
        }
    }

    public function inicializar($nombre, $sueldo, $email, $fechaNacimiento, $peso, $altura) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->email = $email;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->peso = $peso;
        $this->altura = $altura;
    }
}
?>