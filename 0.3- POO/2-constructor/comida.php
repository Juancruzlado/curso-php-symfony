<?php 

/**
 * Clases
 * Una abstracción de un elemento de la vida real para transformarlo en elemento utilizable
 * dentro de la programación. Las clases estan conformadas tanto por propiedades (Son como variables dentro de la clase)
 * como por metodos (Son como funciones dentro de la clase)
 * 
 * Visibilidad de las variables de una clase
 */

class Comida
{
    /**
     * Las variables publicas desde esta clase, fuera de la misma o en clases heredadas o subclases. 
     */
    public $nombre;

    /**
     * Las variables protegidas se pueden acceder desde esta clase, en clases heredadas pero no se pueden acceder fuera de la clase.
     */
    protected $vitaminas;

    /**
     * Las variables privadas se pueden acceder desde esta clase, pero no se puede acceder desde ninguna otra forma más. 
     */
    private $minerales;

    public $calorias;

    public function __construct($nombre, $vitaminas, $minerales,$calorias){
        $this->nombre = $nombre;
        $this->vitaminas = $vitaminas;
        $this->minerales = $minerales;
        $this->calorias = $calorias;
    }

    // Siempre se tiene por lo general dos funciones, una set y otra get por cada propiedad.
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }    

    public function getNombre(){
        return $this->nombre;
    }

    public function setVitaminas($vita){
        $this->vitaminas = $vita;
    }

    public function getMinerales(){
        return $this->minerales;
    }
}

?>