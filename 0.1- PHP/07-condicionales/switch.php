<?php

// Switch Una alternativa al if para cuando hay muchos casos para contemplar

$nota = 1;

switch($nota){
    case 1:
        echo "Desaprobo";
        break;
    case 2:
        echo "Desaprobo";
        break;
    case 3:
        echo "Desaprobo";
        break;
    case 4:
        echo "Aprobo";
        break;
    case 5:
        echo "Aprobo";
        break;
    default:
        echo "No es una nota valida";
}

?>