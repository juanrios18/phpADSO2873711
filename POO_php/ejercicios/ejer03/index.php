<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 3</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="form-container">
        <h2>Datos Empleado</h2>
        <form action="procesarDatos.php" method="POST">
            <input type="hidden" name="tipoFormulario" value="empleado">

            <label for="nombre">Ingrese su Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="sueldo">Ingrese su Sueldo:</label>
            <input type="number" id="sueldo" name="sueldo" required>

            <label for="email">Ingrese su Email:</label>
            <input type="email" id="email" name="email">

            <label for="fechaNacimiento">Ingrese su Fecha de Nacimiento:</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento">

            <label for="peso">Ingrese su Peso:</label>
            <input type="text" id="peso" name="peso">

            <label for="altura">Ingrese su Altura</label>
            <input type="text" id="altura" name="altura">

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>