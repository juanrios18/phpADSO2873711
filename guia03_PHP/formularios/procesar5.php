<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/formulario5.css">
</head>
<body>
    <div class="info-container">
        <?php
            $nombre = (isset($_POST['txtNombre'])==true)?$_POST['txtNombre']:null;
            $cedula = (isset($_POST['txtCedula'])==true)?$_POST['txtCedula']:null;
            $telefono = $_POST['txtTelefono'] ?? null;
            $email = isset($_POST['txtEmail'])?$_POST['txtEmail']:null;
            $sinEstudios = $_POST['txtSinEstudios'] ?? null;
            $conPrimarios = $_POST['txtConPrimarios'] ?? null;
            $conSecundarios = $_POST['txtConSecundarios'] ?? null;
            $tipoEstudio = $_POST['tipoEstudio'] ?? null;
            $estudio = null;

            echo "<span>Nombre: $nombre.</span>";
            echo "<span>Cédula: $cedula.</span>";
            echo "<span>Telefono: $telefono.</span>";
            echo "<span>Email: $email.</span>";
            if ($tipoEstudio == "1") {
                $estudio = $tipoEstudio;
            }elseif($tipoEstudio == "2"){
                $estudio = $tipoEstudio;
            }else{
                $estudio = $tipoEstudio;
            }
            echo "<span>La persona ingresada cuenta con estudios de tipo $estudio.</span>"
        ?>
    </div>
</body>
</html>