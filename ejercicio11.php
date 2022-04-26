<!-- Enunciado:

Escribir un programa que dado un número calcule su factorial
Es decir, si el número es 5 el resultado sea:

5 x 4 x 3 x 2 x 1 = 120


Objetivo:

Comprender las funciones recursivas. -->

<?php


function math($number)
{
    if ($number < 2) {
        return 1;
    } else {
        return ($number * math($number - 1));
    }
}

echo math(5);
