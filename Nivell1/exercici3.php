<?php

function caracter($palabras, $caracter)
{
    $caracter = strtolower($caracter);

    foreach ($palabras as $palabra) {

        $palabra = strtolower($palabra);

        if (strpos($palabra, $caracter) === false) {
            return false;
        }
    }

    return true;
}

$palabras = ["hola", "Php", "Html"];

$resultado = caracter($palabras, "h");

var_dump($resultado);

?>