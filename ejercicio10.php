<!-- Enunciado:
Crear una función que ‘milenialice’ un texto que se le pase, es decir:
    * los ‘que’ los convierte el ‘k’
    porque => xq
    * Pone todo en mayúsculas indistintamente
    * Gu/Bu => w
    * Igual => =
    * Sin apertura de ¡ ni ¿, ni acentuación
Podéis echarle imaginación ;)
Objetivo:
Practicar con funciones cadenas y arrays.
Mover esas funciones a un fichero llamado util.php y hacer llamadas a dichas funciones desde otro fichero diferente. -->

<?php


function boomerText($param1)
{
    $first = array('que', 'porque', 'gu', 'wu', 'igual', 'á', 'é', 'í', 'ó', 'ú', '!');
    $boomer = array('k', 'xq', 'w', 'w', '=', 'a', 'e', 'i', 'o', 'u', '');

    return str_replace($first, $boomer, $param1);
}

$string = "!que porque gu wu igual áéíóú¡";

echo boomerText($string);
