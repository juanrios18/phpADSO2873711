<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Usuario Reto</title>
    <link rel="stylesheet" href="css/formulario3.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar3.php" method="post">
            <h2>Crear Usuario</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="form-group">
                <label for="txtFecha">Fecha de Nacimiento</label>
                <input type="date" name="txtFecha" id="txtFecha" required min="1900-01-01" max="2024-10-10">
            </div>
            <div class="form-group">
                <label for="txtTelefono">Teléfono</label>
                <input type="text" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="form-group">
                <label for="txtCiudad">Escoja ciudad de residencia</label>
                <select name="txtCiudad" id="txtCiudad" required>
                    <option value="">----------</option>
                    <option value="Manizales">Manizales</option>
                    <option value="Medellin">Medellin</option>
                    <option value="Bogota">Bogota</option>
                    <option value="Bucaramanga">Bucaramanga</option>
                    <option value="Barranquilla">Barranquilla</option>
                    <option value="Pereira">Pereira</option>
                    <option value="Cartagena">Cartagena</option>
                    <option value="Cali">Cali</option>
                    <option value="Rioacha">Rioacha</option>
                    <option value="Neiva">Neiva</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
</body>
</html>