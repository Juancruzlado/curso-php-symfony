<?php 

/**
 * Las interfaces de objetos permiten crear codigo donde se define que metodos va a usar, el bloque de codigo que implemente a esta interfaz.
 */

 interface Lenguaje
 {
    public function compila();

    public function ejecutar();

    public function logger();

    public function documentacion();
 }

 class PHP implements Lenguaje 
 {
    private $version;

    function getVersion(){
        return $this->version;
    }

    function setVersion($version){
        $this->version = $version;
    }

    public function compila(){
        return true;
    }

    public function ejecutar(){
        return true;
    }

    public function logger(){
        return true;
    }

    public function documentacion(){
        return true;
    }
}

$php = new PHP();
$php->setVersion(8.2);
echo "PHP esta en la version: ".$php->getVersion();