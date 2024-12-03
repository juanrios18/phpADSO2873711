<?php
include 'Empleado.class.php'; // Incluir el archivo Empleado.class.php

$nombre = $_POST['txtNombre'] ?? null;
$fechaNac = $_POST['txtfechaNac'] ?? null;
$email = $_POST['txtEmail'] ?? null;
$sueldo = $_POST['txtSueldo'] ?? null;
$peso = $_POST['txtPeso'] ?? null;
$altura = $_POST['txtAltura'] ?? null;

if ($nombre && $fechaNac && $email && $sueldo && $peso && $altura) {
    $empleado = new Empleado();
    $empleado->inicializar($nombre, $sueldo, $email, $fechaNac, $peso, $altura);
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos del Empleado</title>
        <link rel="stylesheet" href="./css/index.css">
    </head>
    <body>
    <div class="form-container">
        <h2> Información Empleado</h2>
        <?php
        $empleado->datosCom();
        ?>

        <a href="index.php"><button class="regresar-btn">Regresar</button></a>
    </div>
    </body>
    </html>

    <?php
} else {
    echo "<div class='form-container'>";
    echo "Por favor, complete todos los campos.";
    echo "</div>";
}
?>