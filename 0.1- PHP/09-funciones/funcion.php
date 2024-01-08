<?php 

/**
 * Las funciones son bloques de codigo que realizan una tarea especifica y pueden recibir parametros
 * y devolver un resultado (return)
 * 
 */

 function imprimeNumeros(){
    echo "123123";
    echo "192.160.0.212";
    echo "<hr/>";
 }

imprimeNumeros();
imprimeNumeros();

function multiplicar($num1, $num2){
    return $num1 * $num2;
}

echo "4 por 5 es igual a ".multiplicar(4,5);
?>