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

if (isset($_SESSION['empleados']) && !empty($_SESSION['empleados'])) {
    echo "<div class='container'><h2>Empleados Existentes</h2>";

    foreach ($_SESSION['empleados'] as $numeroEmpleado => $empleado) {
        $empleado = unserialize($empleado);

        if ($empleado instanceof Empleado) {
            echo "<div class='employee details'>";
            echo "<h3>Empleado: $numeroEmpleado</h3>";
            echo "<p><strong>Nombre: </strong>". $empleado->getNombre()."</p>";
            echo "<p><strong>Sueldo: </strong>". $empleado->getSueldo(). "</p>";
            echo "<p><strong>Email: </strong>". $empleado->getEmail(). "</p>";
            echo "<p><strong>Fecha de Nacimiento: </strong>". $empleado->getFechaNacimiento(). "</p>";
            echo "<p><strong>Peso: </strong>". $empleado->getPeso(). "</p>";
            echo "<p><strong>Altura: </strong>". $empleado->getAltura(). "</p>";

            $empleado->imprimir();

        echo "</div>";
        } else {
            echo "<p>Error: El empleado no es una instancia valida de la clase Empleado.</p>";
        }  
    }
    echo "</div>";
} else {
    echo "<p>No se encuentran empleados registradas.</p>";
}