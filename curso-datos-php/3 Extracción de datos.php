<?php

//$data = "Estudio PHP";
//echo $data[0];

//$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quae! Libero dicta adipisci suscipit molestiae ad facilis quibusdam quisquam nam veritatis natus laboriosam, qui delectus voluptates alias excepturi impedit voluptas";
//$extract = substr($post, 0, 20);
//echo "$extract... [ver más]";

/*/
$data = "javascript, php, laravel"; //campo tags
$tags = explode(", ", $data); //se convierte en array
echo "<pre>";
var_dump($tags);
*/

//$courses = ["javascript", "php", "laravel"];

//crea un string a partir de un array separado por algo ", "
//echo implode(", ", $courses);

$course = "    Curso de PHP         ";
$course = trim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";