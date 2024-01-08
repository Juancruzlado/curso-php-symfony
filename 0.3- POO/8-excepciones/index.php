<?php

// Excepciones son para frenar la ejecución del codigo si es que falla, y poder seguir con el programa, mientras nos muestra un mensaje de error que detalla el problema.

try {
    if(isset($var)){
        echo 'La variable $var esta seteada';
    }else{
        throw new Exception('No esta seteada la variable $var');
    }
} catch(Exception $e){
    echo "Error: --> ".$e->getMessage();
}