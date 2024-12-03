<?php
require_once 'connection.php';
$sqlPDO = $dbPDO->prepare("SELECT * FROM personas");
$sqlPDO->setFetchMode(PDO::FETCH_OBJ);
$sqlPDO->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <div class="button-add">
            <a href="addPersonas.php" class="btn-add">Agregar Persona</a>
        </div>
        <h2>Lista de Personas</h2>
        <div class="cars-container">
            <?php
            while ($row = $sqlPDO->fetch()) {?>
                <div class="card-element">
                    <div class="item-card">Nombre:<?php echo $row->nombre ?></div>
                    <div class="item-card">Email:<?php echo $row->email ?></div>
                    <div class="item-card">Peso:<?php echo $row->peso ?></div>
                    <div class="item-card">Cantidad de Hijos:<?php echo $row->cantidadHijos ?></div>
                    <div class="button-container">
                        <a href="editPersonas.php?id=<?php echo $row->id ?>" class="btn-edit">Editar</a>
                        <a href="deletePersonas.php?id=<?php echo $row->id ?>" class="btn-delete">Eliminar</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>