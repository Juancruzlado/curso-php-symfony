<?php 

require_once 'estatico.php';

Producto::setNombre('Redragon Kumara');
Producto::setValor(35000);
Producto::setFecha_de_subida('12/10/23');

echo Producto::$nombre . '<br/>';
echo Producto::$valor . '<br/>';
echo Producto::$fecha_de_subida . '<br/>';

$producto = new Producto();
$producto::$nombre = 'Iphone X';
echo $producto::$nombre;
var_dump($producto);