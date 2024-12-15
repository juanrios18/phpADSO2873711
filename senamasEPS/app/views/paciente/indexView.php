<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Lista Pacientes</h1>
        <?php
        foreach ($data['patients'] as $item) {
            echo "<br>Nombre: $item->nombre";
        }
        ?>
    </div>
</body>
</html>