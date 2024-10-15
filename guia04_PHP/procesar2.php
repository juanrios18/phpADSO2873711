<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/checkbox2.css">
</head>
<body>
    <div class="info-container">
        <?php
            $nombre = $_POST["txtNombre"] ?? "";
            $deportes = $_POST["deportes"] ?? null;
            $cantidadDeportes = count($deportes);

            $htmlDeportes = "";
            foreach ($deportes as $item) {
                $htmlDeportes .= "<label>$item</label>";
            }
            $outPut = <<<OUT
                <label><h4>Nombre: </h4> $nombre.</label>
                <label><h4>Cantidad de Deportes: </h4> $cantidadDeportes.</label>
                <label><h4>Deportes seleccionados: </h4></label>
                $htmlDeportes
            OUT;
            echo $outPut;
            //echo "<pre>";
            //print_r($deportes);
            //echo "</pre>";
        ?>
    </div>
</body>
</html>