<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar1.php" method="post">
            <h2>Registrar Usuario</h2>
            <div class="form-group">
                <label for="txtTipousuario">Tipo Usuario</label>
                <select name="txtTipousuario" id="txtTipousuario">
                    <option value="">--------------------</option>
                    <option value="Estudiante">Estudiante</option>
                    <option value="Profesor">Profesor</option>
                    <option value="Administrativo">Administrativo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="txtUsuario">Usuario</label>
                <input type="text" name="txtUsuario" id="txtUsuario">
            </div>
            <div class="form-group">
                <label for="txtPassword">Contraseña</label>
                <input type="password" name="txtPassword" id="txtPassword"> 
            </div>
            <div class="form-group">
                <label for="txtDireccion">Dirección</label>
                <input type="text" name="txtDireccion" id="txtDireccion"> 
            </div>
            <div class="form-group">
                <label for="txtTelefono">Teléfono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono"> 
            </div>
            <div class="form-group">
                <button type="submit">Registrarse</button>
            </div>
        </form>
    </div>
</body>
</html>