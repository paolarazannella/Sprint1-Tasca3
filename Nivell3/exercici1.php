<?php

$lista = [3, 29, 48, 8, 6, 10, 5];

function alcubo ($numero){

    return $numero * $numero * $numero;

}

$listaNueva = array_map("alcubo", $lista);

echo "lista sin cambios";

echo "<pre>";
print_r($lista);
"</pre>";

echo "lista elevada al cubo";

echo "<pre>";
print_r($listaNueva);
"</pre>";


?>