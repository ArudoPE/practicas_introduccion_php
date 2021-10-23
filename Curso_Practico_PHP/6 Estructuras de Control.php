<?php
/*
//If

$valorA = 10;

if ($valorA == 10){
    echo "Es igual a 10 <br>";
} else {
    echo "No es igual a 10 <br>";
}

// while / do while
$i = 0;

while($i <= 10){
    echo $i++ . "<br>";
}

$j = 0;

do{
    echo $j++ . "<br>";

}while($j<=10);

// for / for each

$array = [1,2,3,4];

for ($i = 0; $i<4; $i++){
    echo "$array[$i] <br>";
}

foreach($array as $value) {
    echo "$value <br>";
}

//switch

$valorA = 3;

switch($valorA){
    case 1:
        echo "El valor es 1<br>";
        break;
    case 2:
        echo "El valor es 2<br>";
        break;
    case 3:
        echo "El valor es 3<br>";
        break;
    default:
        echo "No es ninguno de los valores 1, 2 o 3";
        break;
}

//carbon

$age = 17;

if($age < 18){
    echo "No se permite el ingreso!";
} else if($age >= 18){
    echo "Ingreso autorizado";
}


$number = 10;

while($number >= 0){
    echo "Quedan $number segundo(s)<br>";
    $number--;
}

$number = 1;

do {
    echo "Este número es mayor a 10<br>";
    $number++;
}while($number > 10);

for($i = 0; $i < 10 ; $i++){
    echo "Han pasado $i segundo(s)<br>";
}


$favoriteFruits = ['Fresa', 'Naranja', 'Mandarina', 'Manzana'];

echo "Mis frutas favoritas son:<br>";

foreach($favoriteFruits as $value){
    echo "$value<br>";
}
*/

$note = 'C';

switch($note){
    case 'A':
        echo "Tienes $note como nota, excelente!";
        break;
    case 'B':
        echo "Tienes $note como nota, bien, puedes mejorar.";
        break;
    case 'C':
        echo "Tienes $note como nota, debes volver a rendir el examen.";
        break;
    case 'D':
        echo "Tienes $note como nota, reprobaste.";
        break;
    default:
        echo "$note es una nota incorrecta.";
        break;
}
