<?php
include "cuenta.php";
include "Empleado.class.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipoFormulario'])) {
    if ($_POST['tipoFormulario'] == 'cuenta') {
        $numeroCuenta = $_POST['numeroCuenta'];
        $nombreTitular = $_POST['nombreTitular'];
        $saldo = $_POST['saldo'];
        $tipoCuenta = $_POST['tipoCuenta'];

        $nuevaCuenta = $_SESSION['cuentas'][$numeroCuenta] = new Cuenta($numeroCuenta, $nombreTitular, $saldo, $tipoCuenta);

        $_SESSION['cuentas'][$numeroCuenta] = serialize($nuevaCuenta);

        echo "<div class='mensaje'>Esta cuenta fue creada exitosamente.<br><br>
                <a href='verDatos.php'>Ver todas las cuentas creadas.</a>
              </div>";
    } elseif ($_POST['tipoFormulario'] == 'empleado') {
        $nombre = $_POST['nombre'];
        $sueldo = $_POST['sueldo'];
        $email = $_POST['email'];
        $fechaNac = $_POST['fechaNacimiento'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $nuevoEmpleado = new Empleado($nombre, $sueldo, $email, $fechaNac, $peso, $altura);

        $_SESSION['empleados'][$nombre] = serialize($nuevoEmpleado);

        echo "<div class='mensaje'>El empleado fue creado exitosamente.</div>";
        header("Location: cuentacrear.php");
    }
}
?>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f4;
    }

    .mensaje {
        background-color: rgb(220, 252, 231);
        border: 3px solid #057e01;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 400px;
    }

    .mensaje a {
        background-color: #00ff9d;
        color: rgb(0, 0, 0);
        border: 1px solid #000;
        border-radius: 5px;
        padding: 5px 10px;
        cursor: pointer;
    }
</style>
