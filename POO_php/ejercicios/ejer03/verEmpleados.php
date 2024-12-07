<?php
include 'cuenta.php';
include 'Empleado.class.php';

echo <<<HTML
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background-color: #f4f4f4;
    }

    .layout-container {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .main-buttons {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .main-buttons button {
        background-color: white;
        border: 2px solid black;
        border-radius: 5px;
        padding: 6px 8px;
        cursor: pointer;
        font-size: 16px;
        text-align: center;
    }

    .main-buttons button:hover {
        background-color: #00ff9d;
        border: 2px solid #057e01;
    }

    .container {
        background-color: #BED8CEFF;
        border: 2px solid black;
        border-radius: 8px;
        max-width: 1000px;
        width: 100%;
        padding: 10px;
    }

    .employees-container {
        justify-content: center;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .employee {
        background-color: rgb(220, 252, 231);
        border: 2px solid #057e01;
        border-radius: 5px;
        padding: 5px;
        width: 300px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .employee h3 {
        text-align: center;
        font-size: 20px;
    }

    .employee p {
        font-size: 16px;
        margin: 5px 0;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
</style>

<div class="layout-container">
    <div class="main-buttons">
        <button onclick="location.href='cuentacrear.php'">Crear Cuenta</button>
        <button onclick="location.href='formTransacciones.php'">Realizar Transacción</button>
        <button onclick="location.href='verDatos.php'">Ver Cuentas</button>
        <button onclick="location.href='index.php'">Crear Empleado</button>
    </div>

    <div>
HTML;

if (isset($_SESSION['empleados']) && !empty($_SESSION['empleados'])) {
    echo "<div class='container'>";
    echo "<h2>Empleados Existentes</h2>";
    echo "<div class='employees-container'>";
    foreach ($_SESSION['empleados'] as $numeroEmpleado => $empleado) {
        $empleado = unserialize($empleado);

        if ($empleado instanceof Empleado) {
            echo "<div class='employee'>";
            echo "<h3>Empleado: $numeroEmpleado</h3>";
            echo "<p><strong>Nombre:</strong> " . $empleado->getNombre() . "</p>";
            echo "<p><strong>Sueldo:</strong> " . $empleado->getSueldo() . "</p>";
            echo "<p><strong>Email:</strong> " . $empleado->getEmail() . "</p>";
            echo "<p><strong>Fecha de Nacimiento:</strong> " . $empleado->getFechaNacimiento() . "</p>";
            echo "<p><strong>Peso:</strong> " . $empleado->getPeso() . " Kg.</p>";
            echo "<p><strong>Altura:</strong> " . $empleado->getAltura() . " m.</p>";
            $empleado->imprimir();
            echo "</div>";
        } else {
            echo "<p>Error: El empleado no es una instancia válida de la clase Empleado.</p>";
        }
    }
    echo "</div>";
    echo "</div>";
} else {
    echo "<h2>Empleados Existentes</h2>";
    echo "<div class='container'>";
    echo "<p>No se encuentran empleados registrados.</p>";
    echo "</div>";
}

echo <<<HTML
    </div>
</div>
HTML;
?>