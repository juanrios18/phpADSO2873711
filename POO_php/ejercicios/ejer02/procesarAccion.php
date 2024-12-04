<?php
session_start();
include 'Cuenta.class.php';

if (!isset($_SESSION['numeroCuenta'])) {
    header("Location: index.php");
    exit;
}

$cuenta = new Cuenta(
    $_SESSION['numeroCuenta'],
    $_SESSION['nombreTitular'],
    $_SESSION['saldo'],
    $_SESSION['tipoCuenta']
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];
    $monto = floatval($_POST['monto'] ?? 0);
    $mensaje = "";

    switch ($accion) {
        case 'ingresar':
            $cuenta->ingresarDinero($monto);
            $mensaje = "Se ingresaron: $".number_format($monto, 2)." pesos.";
            break;
        case 'retirar':
            $mensaje = $cuenta->retirarDinero($monto) 
                ? "Se retiraron: $".number_format($monto, 2)." pesos." 
                : "Saldo insuficiente.";
            break;
        case 'pagar':
            $mensaje = $cuenta->pagarFactura($monto) 
                ? "Factura pagada por: $".number_format($monto, 2)." pesos." 
                : "Saldo insuficiente.";
            break;
        case 'transferir':
            $cuentaDestino = $_POST['cuentaDestino'] ?? '';
            $mensaje = $cuenta->transferirSaldo($monto, $cuentaDestino) 
                ? "Se transfirió: $".number_format($monto, 2)." pesos, a la cuenta ".$cuentaDestino."." 
                : "Saldo insuficiente.";
            break;
    }

    $_SESSION['saldo'] = $cuenta->getSaldo();
    $_SESSION['mensaje'] = $mensaje;
    header("Location: acciones.php");
}
?>