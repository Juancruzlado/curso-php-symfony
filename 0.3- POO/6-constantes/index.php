<?php

/**
 * Una constante es el dato que no cambia, y aca lo estamos utilizando dentro de una clase.
 */
class User{
    const ROLE = "ROLE_USER";

    public $username;

    public $password;

    function getUsername(){
        // como ROLE es una constante estatica, definida a nivel de clase, si queremos acceder a ella no podemos utilizar el metodo de objeto de $this->ROLE;
        //self::ROLE; esta sería la forma correcta de hacerlo.
        return $this->username;
    }

    function setUsername($user){
        $this->username = $user;
    }

    function getPassword(){
        return $this->password;
    }

    function setPassword($pass){
        $this->password = $pass;
    }
}
// aca estamos llamando a la constante sin instanciar ningun objeto
echo User::ROLE;
// aca instanciamos un objeto y llamamos a la constante
$usern = new User();
echo "<hr>";
echo $user::ROLE;
var_dump($user);