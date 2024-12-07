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
        return "Se han ingresado $monto. Saldo actual: $this->saldo.";
    }

    public function retirarDinero($monto) {
        if ($this->saldo >= $monto) {
            $this->saldo -= $monto;
            return "Se han retirado $monto. Saldo actual: $this->saldo.";
        } else {
            return "Fondos insuficientes. Saldo actual: $this->saldo.";
        }
    }

    public function pagarFactura($monto) {
        return $this->retirarDinero($monto);
    }

    public function transferirSaldo($cuentaDestino, $monto) {
        if ($this->saldo >= $monto) {
            $this->saldo -= $monto;
            $cuentaDestino->ingresarDinero($monto);
            return "Se han transferido $monto a la cuenta {$cuentaDestino->numeroCuenta}. Saldo actual: $this->saldo.";
        } else {
            return "Fondos insuficientes para transferir. Saldo actual: $this->saldo.";
        }
    }

    public function getNombreTitular() {
        return $this->nombreTitular;
    }
}
