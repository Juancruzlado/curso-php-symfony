<?php

/**
 * Un if se usa para un chequedo de una condición, si es afirmativo se ejecuta una instruccion, sino se puede poner un else, y darle una 
 * instrucción por si es negativo.
 * 
 * if(condición){
 *      instrucción 
 * } else {
 *      instruccion
 * }
 */

$color = 'humano';

if($color == 'humano'){
    echo "Es color humano";
} else {
    echo "No es color humano";
}

/**
 * Operadores de comparación
 */
$presupuesto = 2000;
$pago = 3000;

 if($presupuesto >= $pago){
    echo "Nos alcanza la plata";
} else {
    echo "No nos alcanza";
}

/**
 * Elseif se puede utilizar luego de un if normal, en vez de un else. 
 * Es como concatenar un if con otro if. 
 */

 $color = "verde";

 if($color == "humano"){
    echo "Es color humano";
 } elseif ($color == "verde"){
    echo "Es color verde";
 }

 ?>