<?php 

// Herencia es la propiedad de un objeto de definir nuevas clases basadas de unas ya existentes, con el fin de reutilizar codigo. 

class Musico{
    public $nombre;

    public $instrumento;

    public $antiguedad;

    public $edad;

    public function __construct(){
        $this->antiguedad = 0;
        $this->instrumento = 'guitarra';
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getInstrumento(){
        return $this->instrumento;
    }

    public function setInstrumento($instrumento){
        $this->instrumento = $instrumento;
    }

    public function getAntiguedad(){
        return $this->antiguedad;
    }

    public function setAntiguedad($antiguedad){
        $this->antiguedad = $antiguedad;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }
}

class Rockero extends Musico{
    public $subgeneros;
    
    public function __construct(){
        parent::__construct();
        $this->subgeneros = ['rock', 'punk', 'funk'];
    }

    public function subgenerosTocados($subgeneros){
        $this->subgeneros = $subgeneros;

        return $this->subgeneros;
    }

    public function tocaRock(){
        return "cantando una cancion de rock";
    }

    public function romperGuitarra(){
        return "Rompe guitarra";
    }
}