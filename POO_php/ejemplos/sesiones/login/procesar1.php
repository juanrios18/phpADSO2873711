<?php
session_start();
//Capturamos los datos del formulario que llegan por POST
$tipoUsuario = $_POST['txtTipousuario'] ?? null;
$usuario = $_POST['txtUsuario'] ?? null;
$password = $_POST['txtPassword'] ?? null;

//Creamos nuetras variables de Sesión
$_SESSION['tipoUsuario'] = $tipoUsuario;
$_SESSION['usuario'] = $usuario;


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
        <h2>Variables de sesión guardas con éxito.</h2>
        <a href="visualizarSesion.php">Visualizar Sesión</a>
    </div>
</body>
</html>