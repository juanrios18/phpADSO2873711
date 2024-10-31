<?php
// Se incluye la clase producto
require_once 'class/Producti.php';
$id = 1;
$nombre = "Portátil Lenovo";
$precio = 2000000;
$descripcion = "Equipo de cómputo";

$prod_obj = new Producto($id,$nombre,$precio,$descripcion);
echo "<br>El Id del prodcuto es: ".$prod_obj->getId();
echo "<br>El Nombre del prodcuto es: ".$prod_obj->getNombre();
echo "<br>El Precio del prodcuto es: ".$prod_obj->getPrecio();
echo "<br>La Descripcion del prodcuto es: ".$prod_obj->getDescripcion();
$prod_obj->setPrecio(3000000);
echo "<br>El nuevo precio del producto es ".$prod_obj->getPrecio();