<?php

/**
 * array_merge($array1, $array2);
 * Une dos arrays, pero si las keys de los elementos
 * son strings iguales, pues prevalece el elemento más reciente
 * Para evitar esto se debe usar una función especial
 * array_merge_recursive($array1, $array2);
 * Pero crear un subarray que tiene todos los elementos que
 * comparten una misma key (en string)
 * array_combine($categories, $courses);
 * Lo que hace es combinar keys y valores en un solo
 * array de keys y valores, siendo el primer parámetro las keys
 * y el segundo los valores
 */

$courses = ['javascript', 'php', 'laravel'];
$categories = ['front', 'back', 'framework'];

echo "<pre>";
var_dump(array_combine($categories, $courses));
//var_dump(array_merge_recursive($frontend, $backend));