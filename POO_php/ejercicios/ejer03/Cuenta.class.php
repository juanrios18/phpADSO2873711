<?php
session_start();

if (!isset($_SESSION['cuentas'])) {
    $_SESSION['cuentas'] = []; //Vector vacio
}

class Cuenta {
    public $numeroCuenta;
    public $nombreTitular;
    public $saldo;
    public $tipoCuenta;

    public function __construct($numeroCuenta, $nombreTitular, $saldo, $tipoCuenta) {
        $this->numeroCuenta = $numeroCuenta;
        $this->nombreTitular = $nombreTitular;
        $this->saldo = $saldo;
        $this->tipoCuenta = $tipoCuenta;
    }

    public function ingresarDinero($monto) {
        $this->saldo += $monto;
        echo "Ingreso aprobado. Su saldo es de: $$this->saldo pesos.<br>";
    }

    public function retirarDinero($monto) {
        if ($monto > $this->saldo) {
            echo "Saldo Insuficiente.";
        } else {
            $this->saldo -= $monto;
            echo "Retiro aprobado. Su nuevo saldo es de: $$this->saldo pesos.<br>";
        }
    }

    public function pagarFactura($monto) {
        $this->retirarDinero($monto);
    }

    public function transferirSaldo($monto, $cuentaDestino) {
        if ($monto > $this->saldo){
            echo "Saldo Insuficiente.<br>";
        } else {
            $this->saldo -= $monto;
            $cuentaDestino-> saldo += $monto;
            echo "Transferencia aprobada. Su nuevo sueldo es de: $$this->saldo pesos.<br>";
        }
    }

    public function __toString() {
        return "La cuenta es: {$this->numeroCuenta}, el nombre del titular es: {$this->nombreTitular}, su saldo es de: {$this->saldo} pesos y el tipo de cuenta es: {$this->tipoCuenta}.";
    }

    public function getNumeroCuenta() {
        return $this->numeroCuenta;
    }

    public function getNombreTitular() {
        return $this->nombreTitular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getTipoCuenta() {
        return $this->tipoCuenta;
    }


}