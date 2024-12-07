<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion</title>
    <link rel="stylesheet" href="css/formTransacciones.css">
</head>
<body>
    <div class="main-buttons">
        <button onclick="location.href='cuentacrear.php'">Crear Cuenta</button>
        <button onclick="location.href='verDatos.php'">Ver Cuentas</button>
        <button onclick="location.href='verEmpleados.php'">Ver Empleados</button>
        <button onclick="location.href='index.php'">Crear Empleado</button>
    </div>

    <form action="transacciones.php" method="POST">
        <h2>Transacción a realizar!!!</h2>
        <label for="numeroCuenta">Ingrese el Número de Cuenta:</label>
        <input type="text" name="numeroCuenta" required><br>

        <label for="tipoTransaccion">Acción:</label>
        <select name="tipoTransaccion" required id="transaccion" onchange="mostrarOcultarCampos()">
            <option value="">Seleccione la accion que desea realizar.</option>
            <option value="transferir">Transferir Saldo</option>
            <option value="depositar">Ingresar Dinero</option>
            <option value="factura">Pagar Factura</option>
            <option value="retirar">Retirar Dinero</option>
        </select><br>

        <label for="monto">Monto:</label>
        <input type="number" name="monto" step="0.01"><br>

        <div id="campoTipoTransaccion">
            <label for="numeroCuentaDestino" class="optional">Numero de la cuenta a transferir:</label>
            <input type="text" name="numeroCuentaDestino" class="optional"><br>
        </div>

        <div class="form-group">
            <input type="submit" value="Procesar Transacción">
        </div>
    </form>
    <script>
        function mostrarOcultarCampos() {
            const transaccion = document.getElementById("transaccion").value;
            const campoTipoTransaccion = document.getElementById("campoTipoTransaccion");

            if(transaccion === 'transferir') {accion
                campoTipoTransaccion.style.display = "block";
            } else {
                campoTipoTransaccion.style.display = "none";
            }
        }
    </script>
</body>
</html>