<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Usuario</title>
    <link rel="stylesheet" href="css/formulario5.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar5.php" method="post">
            <h2>Formulario Usuario</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtCedula">Cédula</label>
                <input type="cedula" name="txtCedula" id="txtCedula">
            </div>
            <div class="form-group">
                <label for="txtTelefono">Teléfono</label>
                <input type="text" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="form-group">
                <label for="txtEmail">Correo Electronico</label>
                <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="form-group">
                <label for="Estudios"><h5>Tipo de Estudio</h5></label>
                <label for="txtSinEstudios"><input type="radio" name="tipoEstudio" id="tipoEstudio" value="1"> No tiene estudios.</label>
                <label for="txtConPrimarios"><input type="radio" name="tipoEstudio" id="tipoEstudio" value="2"> Estudios primarios.</label>
                <label for="txtConSecundarios"><input type="radio" name="tipoEstudio" id="tipoEstudio" value="3"> Estudios secundarios.</label>
            </div>
            <div class="form-group">
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
</body>
</html>