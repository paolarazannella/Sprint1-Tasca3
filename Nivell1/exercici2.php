<?php

$numeros = [10, 20, 30, 40, 50, 60];

echo "Medida: " . count($numeros);

echo "<br>";

unset($numeros[2]);
$numeros = array_values($numeros);


echo "medida final: " . count($numeros);

echo "<br>";

echo "Contenido:";

echo "<pre>";
print_r($numeros);
echo "</pre>";

?>