<?php

$password = '1234569';

/**
 * Este Regex dice: Quiero una contraseña solo
 * de números, del 0 al 9, y que tenga como longitud
 * mínimo 6 caracteres y máximo 9
 **/

var_dump ((bool)preg_match('/^[0-9]{6,9}$/', $password));