<?php

/**
 *sort($array); ordena un array
 *rsort($array); ordena un array de forma reversa
 *ksort($array); ordena un array en base a su key
 *krsort($array); ordena un array en base a su key de forma reversa
 *array_slice($array, n); quita el elemento n
 *array_chunk($array, n); parte un array en n pedazos
 *Lo curioso es que crea n arrays
 *
 *
 */

$courses = [
    'backend' => 'php',
    'frontend' => 'javascript',
    'framework' => 'laravel'
];
krsort($courses);

echo "<pre>";
//var_dump($courses);

//var_dump(array_chunk($courses, 2));

//El sistema retorna 'php', quitándolo del array
//Es decir borra el primer elemento
// array_shift($courses); ['javascript','laravel'];

//El sistema retorna 'laravel', quitándolo del array
//Es decir borra el último elemento
//array_pop($courses); ['php', 'javascript'];


//El sistema agrega uno o más elemento al inicio del array
//array_unshift($courses, 'python'); ['python', 'php', 'javascript','laravel'];

//El sistema agrega uno o más elemento al final del array
//array_push($courses, 'python'); ['php', 'javascript','laravel', 'python'];

//El sistema invierte entre keys y valores del array
var_dump(array_flip($courses));