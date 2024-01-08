<?php

/**
 * Iterar en Arrays
 * se utiliza para cuando queremos que a cada elemento de un array se le aplique 
 * una instrucción particular, de esta manera no tenemos que llamar por cada elemento del array 
 * de manera numerica y secuencial. 
 * Las dos formas principales dos:
 * For y un Foreach
 * for(contador = 0; contador <= x; contador++){
 *      retorna instrucciones
 * }
 */

 $artesMarciales = array('boxeo', 'judo', 'muay thai');
$artistasMarciales = ['Jon Jones', 'CroCop', 'Maravilla Martinez'];

for($i = 0; $i < count($artesMarciales); $i++ ){
    echo "<h1>".$artesMarciales[$i]."</h1>";
}

foreach($artistasMarciales as $artista){
    echo "<h1>".$artista."</h1>";
}
?>