<?php

class Admin{
    public $password;

    public $role;
    
    public function __construct(){
        echo "se instancia y crea al objeto"."<br/>";
    }

    public function __destruct(){
        echo "se destruye el objeto";
    }
}

$admin = new Admin();