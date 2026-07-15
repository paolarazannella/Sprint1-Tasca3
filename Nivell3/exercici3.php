<?php

$numeros = [2, 4, 75, 8, 14, 15, 24, 11];

function primo($numero)
{
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {

        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

function sumarPrimos($suma, $numero)
{
    if (primo($numero)) {
        $suma = $suma + $numero;
    }

    return $suma;
}

$resultado = array_reduce(
    $numeros,
    "sumarPrimos",
    0
);

echo "La suma de los numeros primos es: " . $resultado;

?>