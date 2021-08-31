<?php
$condition = 0;
//Estructuras de control

//Condicionales
if($condition) {
    #code
} elseif($condition) {
    #code
} else {
    #code
}

$login = 0;
//Switch
switch ($login) {
    case true:
        #code
        break;
    case false:
        #code
        break;
    default:
        #code
        break;
}


//Ciclos

//Foreach
/*
foreach($datos as $key => $value) {
    #code
}

//ejemplo de consulta, usuarios
foreach($datos as $row) {
    #code
}
*/

//while

$a = 1;
while ($a <= 10) {
    #code
    echo $a;
    echo "\n";
    $a++;
}

//Do While

$b = 100;
do {
    echo $b;
    echo "\n";
} while ($b <= 10);

//for

for($i=0; $i<10; $i++) {
    echo $i;
}