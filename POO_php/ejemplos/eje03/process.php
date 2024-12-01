<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion vehiculo</title>
    <link rel="stylesheet" href="css/index1.css">
</head>
<body>
    <div class="info-container">
        <?php
        $tipoVehiculo = $_POST['txtVehiculo'] ?? null;
        $marca = $_POST['txtMarca'] ?? null;
        $cantRuedas = $_POST['txtCantR'] ?? null;
        $cantPuertas = $_POST['CantP']!=null && $_POST['CantP'] != "" ? $_POST['CantP'] : "La moto no tiene puertas.";
        $encendido = $_POST['estadoEncendido'] ?? null;
        $output = <<<OUT
        <label><h4>Tipo Vehiculo:</h4> $tipoVehiculo</label>
        <label><h4>Marca del Vehiculo:</h4> $marca</label>
        <label><h4>Cantidad Ruedas:</h4> $cantRuedas</label>
        <label><h4>Cantidad Puertas:</h4> $cantPuertas</label>
        <label><h4>¿Esta Encendido?:</h4> $encendido</label>
        OUT;
        echo $output;
        ?>
    </div>
</body>
</html>