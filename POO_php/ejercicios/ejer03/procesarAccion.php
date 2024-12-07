<?php
require_once "Cuenta.class.php";

if ($_SESSION['REQUEST_METHOD'] === 'POST' && isset($_POST['tipoTransaccion'])) {
    $tipotransaccion = $_POST['tipoTransaccion'];
    $numeroCuenta = $_POST['numeroCuenta'];

    if (isset($_SESSION['cuentas'][$numeroCuenta])) {
        $cuenta = unserialize($_SESSION['cuentas'][$numeroCuenta]);
        if ($cuenta instanceof Cuenta) {
            switch ($tipotransaccion) {
                case 'depositar':
                    $monto = $_POST['monto'];
                    echo $cuenta->getSaldo();
                    $cuenta->ingresarDinero($monto);
                    echo "Ingreso realizado. Su nuevo saldo es de: $".$cuenta->getSaldo();
                    header("location: verDatos.php");
                    break;

                case 'factura':
                    $monto = $_POST['monto'];
                    $cuenta->retirarDinero($monto);
                    echo "Pago de factura realizado. Su nuevo saldo es de: $".$cuenta->getSaldo();
                    header("location: verDatos.php");
                    break;

                case 'retirar':
                    $monto = $_POST['monto'];
                    $cuenta->retirarDinero($monto);
                    echo "Retiro realizado. Su nuevo saldo es de: $".$cuenta->getSaldo();
                    header("location: verDatos.php");
                    break;

                case 'transferir':
                    $numeroCuentaDestino = $_POST['numeroCuentaDestino'];
                    if(isset($_SESSION['cuentas'][$numeroCuentaDestino])){
                        $cuentaDestino = unserialize($_SESSION['cuentas'][$numeroCuentaDestino]);
                        if ($cuentaDestino instanceof Cuenta) {
                            $monto = $_POST['monto'];
                            $cuenta->transferirSaldo($monto, $cuentaDestino);
                            echo "Transferencia realizada. El saldo de la cuenta de origen es: $".$cuenta->getSaldo();

                            $_SESSION['cuentas'][$numeroCuenta] = serialize($cuenta);
                            $_SESSION['cuentas'][$numeroCuentaDestino] = serialize($cuentaDestino);

                            header("location: verDatos.php");
                        } else {
                            echo "La cuenta del destino no es valida.";
                        }
                    } else {
                        echo "La cuenta de destino no existe.";
                    }
                    break;
                
                default:
                    echo "La acción no es valida";
                    break;
            }

            $_SESSION['cuentas'][$numeroCuenta] = serialize($cuenta);
        } else {
            echo "Error, Este objeto no es de la clase cuenta.";
        }
    } else {
        echo "La cuenta ingresada no existe / no se puede validar.";
    }
} else {
    echo "No se recibieron datos validos.";
}