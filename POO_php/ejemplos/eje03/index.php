<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Vehiculos</title>
    <link rel="stylesheet" href="css/index1.css">
</head>

<body>
    <div class="form-container">
        <form action="procesar1.php" method="post"></form>
        <h2>REGISTRO VEHÍCULOS</h2>
        <div class="form-group">
            <label for="txtVehiculo">Tipo Vehiculo</label>
            <select name="txtVehiculo" id="txtVehiculo" required>
                <option value="">-------------------------</option>
                <option value="Moto">Moto</option>
                <option value="Auto">Auto</option>
            </select>
        </div>
        <div class="form-group">
            <label for="txtMarca">Marca</label>
            <input type="text" name="txtMarca" id="txtMarca">
        </div>
        <div class="form-group">
            <label for="txtCantR">Cantidad Ruedas</label>
            <input type="number" name="txtCantR" id="txtCantR">
        </div>
        <div class="form-group">
            <label for="txtCantP">Cantidad Puertas</label>
            <input type="number" name="txtCantP" id="txtCantP">
        </div>
        <div class="form-group">
            <label for="Encendido">
                <h5>Vehiculo Encendido</h5>
            </label>
            <label for="txtEncendido"><input type="radio" name="estadoEncendido" id="estadoEncendido" value="1">Si.</label>
            <label for="txtNoEncendido"><input type="radio" name="estadoEncendido" id="estadoEncendido" value="2">No.</label>
        </div>
        <div class="form-group">
                <button type="submit">Registrar</button>
            </div>
    </div>
</body>

</html>