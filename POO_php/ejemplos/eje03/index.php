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
        <form action="process.php" method="post">
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
                <input type="text" name="txtMarca" id="txtMarca" required>
            </div>
            <div class="form-group">
                <label for="txtCantR">Cantidad Ruedas</label>
                <input type="number" name="txtCantR" id="txtCantR" required>
            </div>
            <div class="form-group" id="CantP">
                <label for="CantP">Cantidad Puertas</label>
                <input type="number" name="CantP" id="CantP">
            </div>
            <div class="form-group">
                <label for="Encendido">Vehiculo Encendido</label>
                <label for="txtEncendido"><input type="radio" name="estadoEncendido" id="estadoEncendido" value="Si." required>Si</label>
                <label for="txtNoEncendido"><input type="radio" name="estadoEncendido" id="estadoEncendido" value="No." required>No</label>
            </div>
            <div class="form-group">
                <button type="submit">Registrar</button>
            </div>
        </form>
    <script>
        const cantPuertas = document.querySelectorAll("#CantP")
        const tipoVehiculo = document.querySelector("#txtVehiculo")

        tipoVehiculo.addEventListener("input", function() {
            if (tipoVehiculo.value == "Moto") {
                cantPuertas[0].style.display = "none"
                cantPuertas[1].value = ""
            } else {
                cantPuertas[0].style.display = "block"
            }
        })
    </script>
</body>

</html>