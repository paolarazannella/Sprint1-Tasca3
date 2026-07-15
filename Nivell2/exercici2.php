<?php

$alumnos = [
    "Paola" => [7, 8, 6, 9, 8],
    "Otto" => [5, 6, 7, 6, 5],
    "Andrea" => [9, 8, 10, 9, 8],
    "Robert" => [4, 6, 5, 7, 6]
];

function medias($alumnos)
{
    $sumaNotas = 0;
    $CantidadNotas = 0;

    foreach ($alumnos as $nombre => $notas) {

        $sumaNotasAlumno = array_sum($notas);

        $mediaAlumno = $sumaNotasAlumno / count($notas);

        echo "La media de " . $nombre . " es: ";
        echo $mediaAlumno;
        echo "<br>";

        $sumaNotas += $sumaNotasAlumno;
        $CantidadNotas += count($notas);
    }

    $mediaClase = $sumaNotas / $CantidadNotas;

    echo "<br>";
    echo "La media de toda la clase es: ";
    echo $mediaClase;
}

medias($alumnos);

?>