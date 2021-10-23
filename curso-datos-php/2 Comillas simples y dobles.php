<?php
/**
 * Podemos usar comillas simples o dobles
 * <br> es el salto de línea
 * podemos escapar caracteres como ' o / anteponiendo un /
 */

/*
echo 'Un texto de una línea
varias líneas
comilla simple \'
backslash \\ continuar más texto
$variable';
*/

// $name = 'Aldo';
// echo "Mi nombre es $name <br>";

// $courses = ['backend' => 'PHP'];

// class User
// {
//     public $name = "Aldo";
// }

// $user = new User;

// echo "$user->name quiere aprender {$courses['backend'][0]}";
//echo "{$courses['backend'][0]}";

$teacher = "Aldo";
$Aldo = "Profesor de PHP";
//variables variables
echo "$teacher es ${$teacher}<br>";

function getTeacher()
{
    return "teacher";
}

$teacher = "Aldo";

echo "${getTeacher()} enseña PHP";