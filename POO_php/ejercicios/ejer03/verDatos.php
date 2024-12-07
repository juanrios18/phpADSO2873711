<?php
include 'Cuenta.class.php';
include 'Empleado.class.php';

echo <<<TEXT
    <div class="main-buttons">
    <button onclick="location.href='crearCuenta.php'">Crear Cuenta</button>
    <button onclick="location.href='acciones.php'">Realizar Acciones</button>
    <button onclick="location.href='verDatos.php'">Ver Cuentas</button>
    <button onclick="location.href='index.php'">Crear Empleado</button>
    <button onclick="location.href='verEmpleados.php'">Ver Empleados</button>
    </div>
TEXT;

if (isset($_SESSION['cuentas']) && !empty($_SESSION['cuentas'])) {
    echo "<h2>Cuentas Existentes</h2>";
    echo "<div clas='cuentas-container'>";
    foreach ($_SESSION['cuentas'] as $numeroCuenta => $cuenta) {
        $cuenta = unserialize($cuenta);
        echo "<div class='cuenta'>";
        echo "<h3>Número de la Cuenta: ".$cuenta->getNumeroCuenta(). "</h3>";
        echo "<p><strong>Nombre del Titular: </strong>". $cuenta->getNombreTitular(). "</p>";
        echo "<p><strong>Saldo: </strong>". $cuenta->getSaldo(). "</p>";
        echo "<p><strong>El Tipo de Cuenta es: </strong>". $cuenta->getTipoCuenta(). "</p>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "<p>No se encuentran cuentas registradas.</p>";
}
?>