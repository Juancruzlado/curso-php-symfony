<?php

require_once 'comida.php';

$comida = new Comida('manzana', ['vitamina a', 'fosforo'], ['zinc', 'manganeso'], 52);

$comida->name = 'kiwi';

//$comida->vitaminas = ['asdf', 'asdf'];
$comida->setVitaminas(['vitamina b3', 'vitamina b1']);
var_dump($comida->getMinerales());
var_dump($comida);