<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['numeroCuenta'] = $_POST['numeroCuenta'];
    $_SESSION['nombreTitular'] = $_POST['nombreTitular'];
    $_SESSION['saldo'] = floatval($_POST['saldo']);
    $_SESSION['tipoCuenta'] = $_POST['tipoCuenta'];
    header("Location: acciones.php");
}
?>
