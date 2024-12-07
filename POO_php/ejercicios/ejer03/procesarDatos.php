<?php
include "Cuenta.class.php";
include "Empleado.class.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tipoFormulario'])) {
    if ($_POST['tipoFormulario'] == 'cuenta') {
        $numeroCuenta = $_POST['numeroCuenta'];
        $nombreTitular = $_POST['nombreTitular'];
        $saldo = $_POST['saldo'];
        $tipoCuenta = $_POST['tipoCuenta'];

        $nuevaCuenta = $_SESSION['cuentas'][$numeroCuenta] = new Cuenta($numeroCuenta, $nombreTitular,$saldo,$tipoCuenta);

        $_SESSION['cuentas'][$numeroCuenta] = serialize($nuevaCuenta);

        echo "Esta cuenta fue creada exitosamente.<br><br>";
        echo "<a href='verDatos.php'> Ver todas las cuentas creadas</a>";
    } elseif ($_POST['tipoFormulario'] == 'empleado') {
        $nombre = $_POST['nombre'];
        $sueldo = $_POST['sueldo'];
        $email = $_POST['email'];
        $fechaNac = $_POST['fechaNac'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $nuevoEmpleado = new Empleado($nombre, $sueldo, $email, $fechaNac, $peso, $altura);

        $_SESSION['empleados'][$nombre] = serialize($nuevoEmpleado);

        echo "El empleado fue creado exitosamente. <br><br>";
        header("Location: crearCuenta.php");
    }
}