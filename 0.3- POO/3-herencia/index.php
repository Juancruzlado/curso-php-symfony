<?php 

require_once 'clase.php';

$musico = new Musico();
var_dump($musico);

$rockero = new Rockero();
$rockero->setEdad(25);
$rockero->subgenerosTocados(['punk-rock', 'heavy metal', 'funk']);
var_dump($rockero);