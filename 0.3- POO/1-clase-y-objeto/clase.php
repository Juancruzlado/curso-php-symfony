<?php 

/**
 * Clases
 * Una abstracción de un elemento de la vida real para transformarlo en elemento utilizable
 * dentro de la programación. Las clases estan conformadas tanto por propiedades (Son como variables dentro de la clase)
 * como por metodos (Son como funciones dentro de la clase)
 */

class Comida
{
    public $name;

    public $vitamins;

    public $minerales;

    public $calories;

    // Siempre se tiene por lo general dos funciones, una set y otra get por cada propiedad.
    public function setName($name){
        $this->name = $name;
    }    

    public function getName(){
        return $this->name;
    }
}

$comida = new Comida();

$comida->setName('fruta');

echo "Hoy comimos ". $comida->getName();

?>