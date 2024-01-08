<?php

/**
 * Variables locales: se pueden utilizar solo dentro de la funcion, y en un return también.
 * 
 * Variables Globales: se pueden utilizar fuera y dentro de la funcion, ademas de en un return también.
 */

 $nombre = "Diego Vega";
 echo $nombre;
 echo "<hr/>";

 function imprimir(){
    global $nombre;
    echo "<h1>$nombre</h1>";

    $dni = 39318888;
    echo "<h1>$dni</h1>";
 }

 echo $nombre;
 echo "<hr/>";
 imprimir();

 /**
  * Funciones variables
  *se utilizan para poder reutilzar codigo y no tener bloques de codigo al tener que hacer variaciones de una tarea/instruccion 
  */

  function hoyNo(){
      return "Hola, hoy no es mi cumpleaños";
  }

  function hoyCumplo(){
      return "Hola hoy es mi cumple";
   }

   $algo = "Cumplo";

   $funcionVariable = "hoy".$algo;
   echo $funcionVariable();
?>