<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/textarea.css">
</head>
<body>
    <div class="info-container">
        <?php
            $nombre = $_POST['txtNombre'] ?? null;
            $perfil = $_POST['txtPerfil'] ?? null;
            $experiencia = $_POST['txtExperiencia'] ?? null;
            // $_FILES: Array asociativo que contiene los archivos subidos por POST
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";
            $name = $_FILES['txtCedula']['name'];            // Nombre del archivo
            $full_path = $_FILES['txtCedula']['full_path'];  // Ruta completa archivo
            $type = $_FILES['txtCedula']['type'];            // Tipo de archivo
            $tmp_name = $_FILES['txtCedula']['tmp_name'];    // Ruta temporal de almacenamiento
            $error = $_FILES['txtCedula']['error'];          // Codigo error
            $size = $_FILES['txtCedula']['size'];            // Tamaño en Bytes del archivo
            $subirArchivo = "uploads/".$name;
            if (move_uploaded_file($tmp_name,$subirArchivo)) {
                echo "Se subió correctamente el archivo $name.";
            }else{
                echo "Error al subir el archivo.";
            }
        ?>
    </div>
</body>
</html>