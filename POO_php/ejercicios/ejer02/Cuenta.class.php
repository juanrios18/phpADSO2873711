<?php
class Cuenta {
    private $numeroCuenta;
    private $nombreTitular;
    private $saldo;
    private $tipoCuenta;

    public function __construct($numeroCuenta, $nombreTitular, $saldo, $tipoCuenta) {
        $this->numeroCuenta = $numeroCuenta;
        $this->nombreTitular = $nombreTitular;
        $this->saldo = $saldo;
        $this->tipoCuenta = $tipoCuenta;
    }

    public function ingresarDinero($monto) {
        $this->saldo += $monto;
    }

    public function retirarDinero($monto) {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
            return true;
        }
        return false;
    }

    public function pagarFactura($monto) {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
            return true;
        }
        return false;
    }

    public function transferirSaldo($monto, $cuentaDestino) {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
            return true;
        }
        return false;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}
?>