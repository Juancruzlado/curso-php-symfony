<?php 

require_once 'clase.php';

$musico = new Musico();
var_dump($musico);

$rockero = new Rockero();
$rockero->setEdad(25);
var_dump($rockero);