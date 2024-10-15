<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/textarea.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar3.php" method="post" enctype="multipart/form-data">
            <h2>Hoja de Vida</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtNombre">Perfil</label>
                <textarea name="txtPerfil" id="txtPerfil" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="txtExperiencia">Experiencia</label>
                <textarea name="txtExperiencia" id="txtExperiencia" cols="30" rows="15"></textarea>
            </div>
            <div class="form-group">
                <label for="txtCedula">Cédula</label>
                <input type="file" name="txtCedula" id="txtCedula">
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>