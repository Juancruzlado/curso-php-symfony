<?php

$texto = 'esto es una variable';

// esto es una constante
define('name', 'Juan Cruz Lado');

echo '<h1>'.name.'</h1>';
echo $texto.'<br>';

// esto es una constante predefinida
echo __FILE__;

?>