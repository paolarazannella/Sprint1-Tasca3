<?php

$strings = [
    "casa",
    "coche",
    "hola",
    "movil",
    "PHP",
    "objetivo"
];

function pares($palabra)
{
    $cantidadCaracteres = strlen($palabra);

    if ($cantidadCaracteres % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$resultado = array_filter(
    $strings, "pares");

$resultado = array_values($resultado);

echo "Palabras con numero par de caracteres:";

echo "<pre>";
print_r($resultado);
echo "</pre>";

?>