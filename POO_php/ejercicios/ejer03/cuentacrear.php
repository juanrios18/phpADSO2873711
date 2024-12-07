<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="form-container">
        <form action="procesardatos.php" method="POST">
            <h2>Registro de Cuenta</h2>
            <input type="hidden" name="tipoFormulario" value="cuenta">

            <div class="form-group">
            <label for="numeroCuenta">Ingrese su Número de Cuenta:</label>
            <input type="text" name="numeroCuenta" required>
            </div>

            <div class="form-group">
            <label for="nombreTitular">Ingrese el Nombre del Titular:</label>
            <input type="text" name="nombreTitular" required>
            </div>

            <div class="form-group">
            <label for="saldo">Ingrese su Saldo:</label>
            <input type="NUMEBR" name="saldo" step="0.01" required>
            </div>

            <div class="form-group">
            <label for="tipoCuenta">Tipo de Cuenta:</label>
            <select name="tipoCuenta" required>
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