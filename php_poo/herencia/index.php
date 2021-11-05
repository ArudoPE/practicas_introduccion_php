<?php

class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

/**
 * Al agregar "final" antes del nombre de la clase,
 * hago que el método no pueda ser redefinido
 * También se le puede colocar a variables o clases
 * Pero si se le coloca a una clase, esta
 * NO podrá ser heredada
*/

    final public function getName()
    {
        return $this->name;
    }
}

class Admin extends User
{
    // code
}

$admin = new Admin('Aldo');
echo $admin->getName();