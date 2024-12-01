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
        if ($tipoUsuario != null && $usuario != null) { ?>
            <h2>Bienvenido <?php echo $usuario; ?>!!!</h2>
            <p>Usted es un <?php echo $tipoUsuario; ?>.</p>
            <?php echo'<br>' ?>
            <h2>Datos de Usuarios Registrados:</h2>
            <!-- <pre> <?php // print_r($_SESSION['usuarios']); ?> </pre> -->
             <?php
             if (isset($_SESSION['usuarios']) && count($_SESSION['usuarios'])>0) {
                foreach ($_SESSION['usuarios'] as $clave => $valor ) {?>
                    <div class="form-item">
                        <p>Tipo de Usuario: <?php echo $valor['tipoUsuario'];?></p>
                        <p>Usuario: <?php echo $valor['usuario'];?></p>
                        <p>Contraseña: <?php echo $valor['password'];?></p>
                        <p>Dirección: <?php echo $valor['direccion'];?></p>
                        <p>Teléfono: <?php echo $valor['telefono'];?></p>
                        <hr>
                    </div>
            <?php
                }
             }
             ?>
            <a href="index.php">Regresar</a>
            <a href="seelAndDestroy.php">Destruir Datos</a>
        <?php } else { ?>
            <h2>Usted no tiene acceso a esta sección.</h2>
        <?php } ?>
    </div>
</body>

</html>