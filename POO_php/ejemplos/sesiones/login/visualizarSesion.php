<?php
session_start();
$tipoUsuario = $_SESSION['tipoUsuario'] ?? 'N/A';
$usuario = $_SESSION['usuario'] ?? 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-container">
        <?php
        if ($tipoUsuario != null && $usuario != null) {?>
            <h2>Bienvenido <?php echo $usuario;?>!!!</h2>
            <p>Usted es un <?php echo $tipoUsuario;?>.</p>
        <?php } else { ?>
            <h2>Usted no tiene acceso a esta sección.</h2>
        <?php } ?>
    </div>
</body>
</html>