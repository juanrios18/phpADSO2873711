<?php
session_start();
if (!isset($_SESSION['numeroCuenta'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Acción</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="form-container">
        <h2>Accion a realizar!!!</h2>
        <form method="post" action="procesarAccion.php">
            <div class="form-group">
                <label for="accion">Acción:</label>
                <select id="accion" name="accion" required>
                <option value="">Seleccione la accion que desea realizar.</option>
                    <option value="ingresar">Ingresar Dinero</option>
                    <option value="retirar">Retirar Dinero</option>
                    <option value="pagar">Pagar Factura</option>
                    <option value="transferir">Transferir Saldo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="number" id="monto" name="monto" required>
            </div>
            <div class="form-group">
                <button type="submit">Procesar</button>
            </div>     
        </form>
        <a href="acciones.php"><button class="regresar-btn">Regresar</button></a>
    </div>
</body>
</html>