<?php
session_start();
if (!isset($_SESSION['numeroCuenta'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acciones</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="form-container">
        <h2>Bienvenido, <?php echo $_SESSION['nombreTitular']; ?>!!!</h2>
        <p><span class="strong-data">Número de Cuenta:</span> <?php echo $_SESSION['numeroCuenta']; ?></p>
        <p><span class="strong-data">Saldo:</span> $<?php echo number_format($_SESSION['saldo'], 2); ?></p>
        <p><span class="strong-data">Tipo de Cuenta:</span> <?php echo $_SESSION['tipoCuenta']; ?></p>

        <?php if (isset($_SESSION['mensaje'])): ?>
            <div class="mensaje">
                <p><?php echo $_SESSION['mensaje']; ?></p>
            </div>
            <?php unset($_SESSION['mensaje']);?>
        <?php endif; ?>

        <div class="form-group">
            <a href="realizarAccion.php"><button class="regresar-btn">Realizar Acción</button></a>
        </div> 
        <div class="form-group">
            <a href="salir.php"><button class="regresar-btn">Salir</button></a>
        </div> 
    </div>
</body>
</html>