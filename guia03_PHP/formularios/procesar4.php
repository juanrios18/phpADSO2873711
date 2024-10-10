<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/formulario4.css">
</head>
<body>
    <div class="info-container">
        <?php
            $numero1 = $_POST['txtNumero1'] ?? null;
            $numero2 = $_POST['txtNumero2'] ?? null;
            $operacion = $_POST['operacion'] ?? null;
            $resultado = null;

            if ($operacion == "sumar") {
                $resultado = $numero1 + $numero2;
            }else{
                $resultado = $numero1 - $numero2;
            }
            echo "<span>El resultado de $operacion $numero1 y $numero2 es: $resultado</span>";
        ?>
    </div>
</body>
</html>