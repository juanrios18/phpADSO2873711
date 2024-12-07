<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
     $color = $_COOKIE["color"] ?? "color-default";
     echo "<div class='container $color'>";
     ?>
        <div class="content-header">
            <?php
            if (isset($_COOKIE['usuario'])) {
                echo "<h2>Hola ".$_COOKIE['usuario']."!!!</h2>";
                echo "<a href='color.php'>Cambiar Color</a>";
            } else {
                echo "<h2>Usuario no logueado.</h2>";
                echo "<a href='login.php'>Iniciar Sesión</a>";
            }
            ?>  
        </div>
    </div>
</body>
</html>