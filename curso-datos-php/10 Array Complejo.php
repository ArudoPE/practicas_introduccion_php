<?php

/**
 * Si usamos foreach ($courses as $key => $value),
 * recorremos todas los valores en base a sus keys
 * siendo $key una palabra reservada que se refiere a la "key"
 * de cada elemento en el array
 */

$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

// foreach ($courses as $key => $value)
// foreach ($courses as $course)
// {
//     echo "$key: $value <br>";
//     echo "$course <br>";
// }

/**
 * array_walk, recorre todos los elementos, ejecutando la
 * función que está como segundo parámetro, y que necesariamente
 * debe estar su nombre entre comillas simples
 */
function upper($course, $key)
{
    echo strtoupper($course) . ": $key <br>";
}
array_walk($courses, 'upper');

/**
 * Esto busca si existe una key en un array:
 * array_key_exists('frontend', $courses);
 * Esto busca si existe un elemento dentro de un array
 * in_array('javascript', $courses);
 * Esto imprime todos los keys en pantalla:
 * array_keys($courses);
 * Esto imprime solo los valores de un array:
 * array_values($courses);
 */
