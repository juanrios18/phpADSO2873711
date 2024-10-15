<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/checkbox2.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar2.php" method="post">
            <h2>Deportes</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <fieldset>
                    <Legend>Seleccione los deportes</Legend>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Fútbol."> Fútbol.
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Baloncesto."> Baloncesto.
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Voleibol."> Voleibol.
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Natación."> Natación.
                    </label>
                    <label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Ajedrez."> Ajedrez.
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Tenis de Mesa."> Tenis de Mesa.
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Tenis."> Tenis.
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Baseball."> Baseball.
                    </label>
                </fieldset>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>