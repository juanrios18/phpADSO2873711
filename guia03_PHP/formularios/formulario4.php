<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Usuario</title>
    <link rel="stylesheet" href="css/formulario4.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar4.php" method="post">
            <h2>Control Radio</h2>
            <div class="form-group">
                <label for="txtNumero1">Número 1</label>
                <input type="number" name="txtNumero1" id="txtNumero1">
            </div>
            <div class="form-group">
                <label for="txtNumero2">Número 2</label>
                <input type="number" name="txtNumero2" id="txtNumero2">
            </div>
            <div class="form-group">
                <label for="txtSumar">Sumar</label>
                <input type="radio" name="operacion" id="operacion" value="sumar">
                <label for="txtRestar">Restar</label>
                <input type="radio" name="operacion" id="operacion" value="restar">
            </div>
        
            <div class="form-group">
                <button type="submit">Realizar operación</button>
            </div>
        </form>
    </div>
</body>
</html>