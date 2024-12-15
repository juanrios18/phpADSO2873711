<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Nuevo Paciente</h1>
        <div class="cont-paciente">
            <form action="/pacientes/new" method="post">
                <div class="form-group">
                    <label for="txtDocumento">Documento</label>
                    <input type="number" name="txtDocumento" id="txtDocumento" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre</label>
                    <input type="number" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtDireccion">Direccion</label>
                    <input type="number" name="txtDireccion" id="txDireccion" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtTelefono">Telefono</label>
                    <input type="number" name="txtTelefono" id="txtTelefono" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input type="number" name="txtEmail" id="txtEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtFechaNac">Fecha Nacimiento</label>
                    <input type="number" name="txtFechaNac" id="txtFechaNac" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtEstado">Estado</label>
                    <input type="number" name="txtEstado" id="txtEstado" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtGenero">Genero</label>
                    <input type="number" name="txtGenero" id="txtGenero" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtEps">EPS</label>
                    <input type="number" name="txtEps" id="txtEps" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtUsuario">Codigo Usuario</label>
                    <input type="number" name="txtUsuario" id="txtUsuario" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>