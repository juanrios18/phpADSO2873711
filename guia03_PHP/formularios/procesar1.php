<?php
// Arrays asociativos nativos de PHP
/*
$_POST: array asociativo que almacena las variables enviadas por el método POST.
    $_POST['txtNombre']

$_GET: array asociativo que almacena las variables enviadas por método GET.
    $_GET['txtEmail']

$_REQUEST: array asociativo que almacena variables de ambos métodos (GET, POST, COOKIE).
    $_REQUEST['txtTelefono']
*/

$nombre = $_POST['txtNombre'];
print("Nombre: $nombre");