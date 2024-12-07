<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
</head>
<body>
    <div class="form-container">
        <h2>Registro de Cuenta</h2>
        <form action="procesarDatos.php" method="POST">
            <input type="hidden" name="tipoFormulario" value="cuenta">

            <label for="numeroCuenta">Ingrese su Número de Cuenta:</label><br>
            <input type="text" name="numeroCuenta" required><br><br>

            <label for="nombreTitular">Ingrese el Nombre del Titular:</label><br>
            <input type="text" name="nombreTitular" required><br><br>

            <label for="saldo">Ingrese su Saldo:</label><br>
            <input type="NUMEBR" name="saldo" step="0.01" required><br><br>

            <label for="tipoCuenta">Tipo de Cuenta:</label><br>
            <select name="tipoCuenta" required>
            <option value="">Seleccione el tipo de cuenta</option>
                <option value="Ahorros">Ahorros</option>
                <option value="Corriente">Corriente</option>
            </select><br><br>

            <button type="submit">Registrar Cuenta</button>
        </form>
    </div>
</body>
</html>