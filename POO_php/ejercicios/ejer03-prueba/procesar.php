<?php
include 'cuenta.php';
session_start();

if (!isset($_SESSION['cuentas'])) {
    $_SESSION['cuentas'] = [];
}
$accion = $_POST['accion'] ?? null;

if ($accion === 'crear') {
    $nuevoTitular = $_POST['nuevoTitular'] ?? null;
    $nuevoSaldo = $_POST['nuevoSaldo'] ?? 0;
    $nuevoTipo = $_POST['nuevoTipo'] ?? "Ahorro";

    $numeroCuenta = uniqid();
    $_SESSION['cuentas'][$numeroCuenta] = new Cuenta($numeroCuenta, $nuevoTitular, $nuevoSaldo, $nuevoTipo);

    echo "<h2>Cuenta Creada</h2>";
    echo "<p>Cuenta $numeroCuenta creada para $nuevoTitular con saldo $nuevoSaldo.</p>";
    echo "<a href='index.php'>Regresar</a>";
    exit;
}
$cuentaSeleccionada = $_POST['cuentaSeleccionada'] ?? null;
$nombre = $_POST['nombre'] ?? null;
$monto = $_POST['monto'] ?? 0;
$cuentaDestinoNumero = $_POST['cuentaDestino'] ?? null;

if (!isset($_SESSION['cuentas'][$cuentaSeleccionada])) {
    echo "<h2>Error</h2>";
    echo "<p>Cuenta no encontrada.</p>";
    echo "<a href='index.php'>Regresar</a>";
    exit;
}

$cuenta = $_SESSION['cuentas'][$cuentaSeleccionada];
$resultado = "";

if ($nombre !== $cuenta->getNombreTitular()) {
    $resultado = "El nombre del titular no coincide con la cuenta.";
} else {
    switch ($accion) {
        case 'ingresar':
            $resultado = $cuenta->ingresarDinero($monto);
            break;
        case 'retirar':
            $resultado = $cuenta->retirarDinero($monto);
            break;
        case 'pagar':
            $resultado = $cuenta->pagarFactura($monto);
            break;
        case 'transferir':
            if (!empty($cuentaDestinoNumero) && isset($_SESSION['cuentas'][$cuentaDestinoNumero])) {
                $cuentaDestino = $_SESSION['cuentas'][$cuentaDestinoNumero];
                $resultado = $cuenta->transferirSaldo($cuentaDestino, $monto);
            } else {
                $resultado = "Debe ingresar un número de cuenta destino válido.";
            }
            break;
        default:
            $resultado = "Acción no válida.";
    }
}

$_SESSION['cuentas'][$cuentaSeleccionada] = $cuenta;


echo "<h2>Resultado</h2>";
echo "<p>$resultado</p>";
echo "<a href='index.php'>Regresar</a>";
?>
