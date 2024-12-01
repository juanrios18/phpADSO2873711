<?php
session_start();
//Capturamos los datos del formulario que llegan por POST
$tipoUsuario = $_POST['txtTipousuario'] ?? null;
$usuario = $_POST['txtUsuario'] ?? null;
$password = $_POST['txtPassword'] ?? null;

$listaUsuarios = $_SESSION['usuarios'] ?? null;

$encontrado = false;
if ($listaUsuarios != null) {
    for ($i = 0; $i < count($listaUsuarios); $i++) { 
        if ($listaUsuarios[$i]['tipoUsuario'] == $tipoUsuario && $listaUsuarios[$i]['usuario'] == $usuario && $listaUsuarios[$i]['password'] == $password) {
            $encontrado = true;
            $_SESSION['tipoUsuario'] = $tipoUsuario;
            $_SESSION['usuario'] = $usuario;
        }
    }
}
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
        if ($encontrado) {
            echo "<h2>Bienvenid@ $usuario!!!</h2>";
            echo "<p>Usted es un $tipoUsuario.</p>";
            echo "<a href='index.php'>Regresar</a>";
            if ($tipoUsuario == 'Administrativo') {
                echo '<br>';
                echo '<a href="visualizarSesion.php">Visualizar Usuarios</a>';
            }
        } else {
            echo "<p>Usted no se encuentra registrado</p>";
            echo "<a href='registro.php'>Registrarme</a>";
        }
        ?>
    </div>
</body>
</html>