<?php


/**
 * Una función anónima se usa en una variable que
 * requiere lógica.
 * Nos referimos a esta función anónima por el nombre
 * de la función
 */
/*
$greet = function ($name)
{
    return "Hola, $name";
};

echo $greet('Aldo');
*/

/**
 * Al poner Clousure podemos asegurar que se necesita
 */

function greet(Closure $lang, $name)
{
    return $lang($name);
}

$es = function($name)
{
    return "Hola, $name";
};

$en = function($name)
{
    return "Hello, $name";
};

echo greet($es, 'Aldo');