<?php
require_once 'connection.php';

$id = intval($_GET['id'] ?? -1);

$sql = $dbPDO->prepare("SELECT * FROM personas WHERE id=:id");
$sql->bindParam(":id", $id, PDO::PARAM_INT);
$sql->setFetchMode(PDO::FETCH_OBJ);
$sql->execute();

$personaDB = $sql->fetch();
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
        <h2>Editar Persona</h2>
        <form action="editProcessPersona.php" method="post">
        <input type="hidden" name="txtId" value="<?php echo $personaDB->id; ?>">
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $personaDB->nombre; ?>">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" value="<?php echo $personaDB->email; ?>">
            </div>
            <div class="form-group">
                <label for="txtPassword">Contraseña</label>
                <input type="password" name="txtPassword" id="txtPassword" value="<?php echo $personaDB->contrasenia; ?>">
            </div>
            <div class="form-group">
                <label for="txtPeso">Peso</label>
                <input type="text" name="txtPeso" id="txtPeso" value="<?php echo $personaDB->peso; ?>">
            </div>
            <div class="form-group">
                <label for="txtCantHijos">Cantidad de Hijos</label>
                <input type="number" name="txtCantHijos" id="txtCantHijos" value="<?php echo $personaDB->cantidadHijos; ?>">
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
            <div class="button-back">
                <a href="viewPersonas.php" class="btn-back">Regresar</a>
            </div>
        </form>
    </div>
</body>
</html>