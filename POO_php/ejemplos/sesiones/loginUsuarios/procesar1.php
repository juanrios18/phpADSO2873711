<?php
session_start();
//Capturamos los datos del formulario que llegan por POST
$tipoUsuario = $_POST['txtTipousuario'] ?? null;
$usuario = $_POST['txtUsuario'] ?? null;
$password = $_POST['txtPassword'] ?? null;
$direccion = $_POST['txtDireccion'] ?? null;
$telefono = $_POST['txtTelefono'] ?? null;

if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = []; // Se crea un array vacia
}
$arrayUsuarios = $_SESSION['usuarios'];
$arrayElemento = array(
    'tipoUsuario'=>$tipoUsuario, 
    'usuario'=>$usuario,
    'password'=>$password, 
    'direccion'=>$direccion,
    'telefono'=>$telefono
);
$arrayUsuarios[] = $arrayElemento; // Se agrega un usuario alarray de usuarios 
$_SESSION['usuarios'] = $arrayUsuarios;

header('Location:index.php');