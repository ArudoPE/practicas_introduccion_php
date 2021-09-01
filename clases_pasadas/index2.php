<?php

// Asignación
$num = 9;
$lang = [
    'es' => 'español',
    'en' => 'inglés'
];

//Bienvenida
echo "<h1>Bienvenido a la clase de asignación y operadores</h1>";

// Aritmética
echo "-Suma 2 + 2 = " . ((int) 2 + (int) 2). "<br/>";
echo "-Resta 2 - 2 = " . ((int) 2 - (int) 2). "<br/>";
echo "-Multiplica 2 * 2 = " . 2 * 2 ."<br/>";
echo "-Divide 2 / 2 = " . 2 / 2 ."<br/>";
echo "-Módulo 2 % 2 = " . 2 % 2 ."<br/>";
echo "-Exponencial 2 ** 2 = " . 2 ** 2 ."<br/>";

// Comparación y variables

/** Comparación
 * Igual ==, valor '9' == 9 [compara solo valor]
 * Igual ===, valor y tipo, '9' === 9 [compara valor y tipo]
 * Diferencias !=, sirve para comparar valor
 * Diferencias !==, sirve para comparar TIPO y valor
 * <, >, <=, >=
 */

// Variables variables (no es un loop xD)
$app = "name";
$name = "platzi";

echo $app; // Imprime en pantalla "name"
echo $$app; // Imprime "Platzi", ¿por qué? Pues ahí va:
/** Al decir echo $app, decimos imprime el contenido de la variable $app
 * Pero si decimos echo $$app, decimos, imprime el contenido
 * de una variable que se llame como el contenido de la variable $app
 * y ¿cuál era el contenido de la variable $app? Pues "name", entonces,
 * practiamente, estamos diciendo: Imprime el contenido de la variable que se llame $name
 */

