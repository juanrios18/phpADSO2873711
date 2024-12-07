<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 3</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="form-container">
        <form action="procesardatos.php" method="POST">
            <h2>Datos Empleado</h2>
            <input type="hidden" name="tipoFormulario" value="empleado">

            <div class="form-group">
                <label for="nombre">Ingrese su Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
            <label for="sueldo">Ingrese su Sueldo:</label>
            <input type="number" id="sueldo" name="sueldo" required>
            </div>

            <div class="form-group">
            <label for="email">Ingrese su Email:</label>
            <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
            <label for="fechaNacimiento">Ingrese su Fecha de Nacimiento:</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
            </div>

            <div class="form-group">
            <label for="peso">Ingrese su Peso:</label>
            <input type="text" id="peso" name="peso" required>
            </div>

            <div class="form-group">
            <label for="altura">Ingrese su Altura</label>
            <input type="text" id="altura" name="altura" required>
            </div>

            <div class="form-group">
            <button type="submit">Registrarse</button>
            </div>
        </form>
    </div>
</body>
</html>