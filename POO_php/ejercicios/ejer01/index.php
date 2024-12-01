<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 01 - Empleado</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
<div class="form-container">
        <form action="procesardatos.php" method="post">
            <h2>Datos Empleado</h2>
            <div class="form-group">
                <label for="txtNombre">Ingrese su nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtfechaNac">Ingrese su fecha de nacimiento</label>
                <input type="date" name="txtfechaNac" id="txtfechaNac">
            </div>
            <div class="form-group">
                <label for="txtEmail">Ingrese su email</label>
                <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="form-group">
                <label for="txtSueldo">Ingrese su sueldo</label>
                <input type="number" name="txtSueldo" id="txtSueldo">
            </div>
            <div class="form-group">
                <label for="txtPeso">Ingrese su peso</label>
                <input type="number" name="txtPeso" id="txtPeso">
            </div>
            <div class="form-group">
                <label for="txtAltura">Ingrese su altura</label>
                <input type="text" name="txtAltura" id="txtAltura">
            </div>
            <div class="form-group">
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
</body>
</html>