<!--Enunciado:

Escribir un programa creando una función que pasado un
array de números nos diga la suma de todos ellos

Objetivo:

Practicar con funciones y arrays.-->


<?php

$number = explode(",", $_GET['a']);

$result;

function suma($array)
{
    $result = 0;
    foreach ($array as $value) {
        $result += $result + $value;
    }
    echo "La suma de los números es: " . $result;
}

suma($number);
