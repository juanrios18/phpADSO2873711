<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/formulario3.css">
</head>
<body>
    <div class="info-container">
        <?php
            // Validación con operador ternario
            $nombre = (isset($_POST['txtNombre'])==true)?$_POST['txtNombre']:null;
            $email = isset($_POST['txtEmail'])?$_POST['txtEmail']:null;
            // Validación NULO seguro
            $telefono = $_POST['txtTelefono'] ?? null;
            $edad = $_POST['txtFecha'] ?? null;
            $birthday = $edad == null ? "Indeterminado": (date("Y") - date("Y", strtotime($edad)));
            $ciudad = $_POST['txtCiudad'] ?? null;
            echo "<span>Nombre: $nombre.</span>";
            echo "<span>Email: $email.</span>";
            echo "<span>Telefono: $telefono.</span>";
            echo "<pan>Ciudad de residencia: $ciudad.</span>";
            echo "<span>Edad: $birthday años.</span>";
            if ($birthday < 18) {
                print("El usuario es menor de Edad.");
            } else{
                print("El usuario es mayor de edad.");
            } 
        ?>
    </div>
</body>
</html>