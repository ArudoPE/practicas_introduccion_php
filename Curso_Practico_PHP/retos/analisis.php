<?php

//print_r($_REQUEST);
$wordsList = ["sol", "luna", "cielo", "luz", "estrellas", "lluvia"];

for ($i=0; $i < count($wordsList); $i++) {
    if($_REQUEST["word".$i] == $wordsList[$i]) {
        echo "La palabra ingresada es correcta.<br>";
    } else {
        echo "La palabra ingresada es incorrecta, y la palabra correcta es: $wordsList[$i].<br>";
    }
}