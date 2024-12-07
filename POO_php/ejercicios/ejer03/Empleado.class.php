<?php

class Empleado {
    private $nombre;
    private $sueldo;
    private $email;
    private $fechaNacimiento;
    private $peso;
    private $altura;

    public function __construct($nombre, $sueldo, $email, $fechaNacimiento, $peso, $altura) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->email = $email;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function imprimir() {
        if ($this->debePagarImpuestos($this->sueldo)) {
            echo "Debe pagar Impuestos.";
        } else {
            echo "No debe pagar impuestos.  ";
        }
        $this->mostrarEdadYVotacion();
    }

    private function debePagarImpuestos($sueldo) {
        return $sueldo > 2000000;
    }

    private function mostrarEdadYVotacion() {
        $edad = $this->calcularEdad();
        echo "<hr>Edad: $edad años.";
        if ($edad >= 18) {
            echo "<hr>Puede votar.";
        } else {
            echo "<hr>No puede votar.";
        }
    }

    private function calcularEdad() {
        $nacimiento = new DateTime($this->fechaNacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($nacimiento)->y;
        return $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getAltura() {
        return $this->altura;
    }
}