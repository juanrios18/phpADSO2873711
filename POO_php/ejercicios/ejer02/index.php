<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="form-container">
        <h2>Registro de Cuenta</h2>
        <form method="post" action="procesarCuenta.php">
            <div class="form-group">
                <label for="numeroCuenta">Número de Cuenta:</label>
                <input type="text" id="numeroCuenta" name="numeroCuenta" required>
            </div>
            <div class="form-group">
                <label for="nombreTitular">Nombre del Titular:</label>
                <input type="text" id="nombreTitular" name="nombreTitular" required>
            </div>
            <div class="form-group">
                <label for="saldo">Saldo Inicial:</label>
                <input type="number" id="saldo" name="saldo" min="0" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="tipoCuenta">Tipo de Cuenta:</label>
                <select id="tipoCuenta" name="tipoCuenta" required>
                    <option value="">Seleccione el tipo de cuenta</option>
                    <option value="Ahorros">Ahorros</option>
                    <option value="Corriente">Corriente</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Registrar Cuenta</button>
            </div>
        </form>
    </div>
</body>
</html>