<?php

//Alterar
$text = "PHP es UN LENGUAJE, año 2020, programación";
//echo strtolower($text);
//echo strtoupper($text);
//echo ucfirst($text);
//echo lcfirst($text);

//Reemplazar
$slug = str_replace(" ", "-", $text);
//echo strtolower($slug);

//Modificación
$code = 39;
//echo str_pad($code, 8, "#", STR_PAD_LEFT);
//echo strip_tags($text);

//echo strtoupper($text); //monobyte
echo mb_strtoupper($text); //multibyte

