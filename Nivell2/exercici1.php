<?php

$lista1 = ["Andrea", "Pedro", "Otto", "Laura"];
$lista2 = ["Otto", "Laura", "Robert", "Marta"];

$comunes = array_intersect($lista1, $lista2);

$mezcla = array_merge($lista1, $lista2);

$mezclaNoRep = array_unique($mezcla);

$exclusivosPrimera = array_diff($lista1, $lista2);

$exclusivosSegunda = array_diff($lista2, $lista1);

$comunes = array_values($comunes);
$mezclaNoRep = array_values($mezclaNoRep);
$exclusivosPrimera = array_values($exclusivosPrimera);
$exclusivosSegunda = array_values($exclusivosSegunda);

echo "Invitados en común";

echo "<pre>";
print_r($comunes);
echo "</pre>";

echo "Mezcla sin repeticiones";

echo "<pre>";
print_r($mezclaNoRep);
echo "</pre>";

echo "Exclusivos primera lista";

echo "<pre>";
print_r($exclusivosPrimera);
echo "</pre>";

echo "Exclusivos segunda lista";

echo "<pre>";
print_r($exclusivosSegunda);
echo "</pre>";

?>
