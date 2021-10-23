<?php
/*
function greet($name)
{
    return "Hola, $name <br>";
}

echo greet('Aldo');
*/

/**
 * Referencias: Al agregar un & antes de la variable,
 * lo que hacemos es pasarla "por referencia", pasando
 * un apuntador a la variable, lo que ocasiona que cuando
 * modificamos la variable dentro de la función, externamente
 * también es afectada
*/

$course = 'PHP';
function path(&$course)
{
    $course = 'Laravel<br>';
    echo $course;
}

path($course);
echo $course; // Laravel

// Predeterminado, valor por defecto

function greet($name = 'Aldo')
{
    return "Hola, $name <br>";
}

echo greet();//Hola Aldo
echo greet('Abel');//Hola Abel