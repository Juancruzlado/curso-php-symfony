<?php

/**
 * los metodos estaticos se pueden usar sin crear una instancia de la clase, el keyword static se usa tambien para declarar variables en una funcion y que pueda permanecer el valor una vez termine su ejecución
 */

 class Producto{
    public static $nombre;

    public static $valor;

    public static $fecha_de_subida;

    public static function getNombre(){
        return self::$nombre;
    }

    public static function setNombre($nom){
        self::$nombre = $nom;
    }

    public static function getValor(){
        return self::$valor;
    }

    public static function setValor($nom){
        self::$valor = $nom;
    }

    public static function getFecha_de_subida(){
        return self::$fecha_de_subida;
    }

    public static function setFecha_de_subida($nom){
        self::$fecha_de_subida = $nom;
    }
 }