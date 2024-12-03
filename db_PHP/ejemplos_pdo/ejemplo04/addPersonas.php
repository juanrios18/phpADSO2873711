<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Agregar Persona</h2>
        <form action="addProcessPersona.php" method="post">
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" required>
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" required>
            </div>
            <div class="form-group">
                <label for="txtPassword">Contraseña</label>
                <input type="password" name="txtPassword" id="txtPassword" required>
            </div>
            <div class="form-group">
                <label for="txtPeso">Peso</label>
                <input type="text" name="txtPeso" id="txtPeso">
            </div>
            <div class="form-group">
                <label for="txtCantHijos">Cantidad de Hijos</label>
                <input type="number" name="txtCantHijos" id="txtCantHijos">
            </div>
            <div class="form-group">
                <button type="submit">Agregar</button>
            </div>
            <div class="button-back">
                <a href="viewPersonas.php" class="btn-back">Regresar</a>
            </div>
        </form>
    </div>
</body>
</html>