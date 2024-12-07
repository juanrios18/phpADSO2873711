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
        gap: 25px;
        align-items: center;
    }

    .main-buttons {
        display: flex;
        flex-direction: column;
        gap: 20px;
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

    .cuentas-wrapper {
        background-color: #BED8CEFF;
        border: 2px solid black;
        border-radius: 8px;
        max-width: 800px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .cuentas-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 10px;
    }

    .cuenta {
        background-color: rgb(220, 252, 231);
        border: 2px solid #057e01;
        border-radius: 5px;
        padding: 10px;
        width: 300px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .cuenta h3 {
        text-align: center;
        font-size: 20px;
    }

    .cuenta p {
        font-size: 16px;
        margin: 5px 0;
    }
</style>

<div class="layout-container">
    <div class="main-buttons">
        <button onclick="location.href='cuentacrear.php'">Crear Cuenta</button>
        <button onclick="location.href='formTransacciones.php'">Realizar Transacción</button>
        <button onclick="location.href='verEmpleados.php'">Ver Empleados</button>
        <button onclick="location.href='index.php'">Crear Empleado</button>
    </div>

    <div>
HTML;

if (isset($_SESSION['cuentas']) && !empty($_SESSION['cuentas'])) {
    echo "<div class='cuentas-wrapper'>";
    echo "<h2>Cuentas Existentes</h2>";
    echo "<div class='cuentas-container'>";
    foreach ($_SESSION['cuentas'] as $numeroCuenta => $cuenta) {
        $cuenta = unserialize($cuenta);
        echo "<div class='cuenta'>";
        echo "<h3>Número de la Cuenta: " . $cuenta->getNumeroCuenta() . "</h3>";
        echo "<p><strong>Nombre del Titular:</strong> " . $cuenta->getNombreTitular() . "</p>";
        echo "<p><strong>Saldo:</strong> " . $cuenta->getSaldo() . "</p>";
        echo "<p><strong>El Tipo de Cuenta es:</strong> " . $cuenta->getTipoCuenta() . "</p>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";
} else {
    echo "<h2>Cuentas Existentes</h2>";
    echo "<div class='cuentas-wrapper'>";
    echo "<p>No se encuentran cuentas registradas.</p>";
    echo "</div>";
}

echo <<<HTML
    </div>
</div>
HTML;
?>