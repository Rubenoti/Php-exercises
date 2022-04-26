<!--Enunciado:

Escribir un programa que dado un número, cree una pirámide cuya base tiene esa longitud en asteriscos.
Es decir, si el número es 5 el resultado sea:

    *
   * *
  * * *
 * * * *
* * * * *

Y si es 3, el resultado sea:

  *
 * *
* * *

Objetivo:

Familiarizarse con el tratamiento de cadenas-->
<?php

if (isset($_GET["number"])) {
    $number = $_GET["number"];
    piramid2($number);
} else {
    echo "Introduce un número";
}

function piramid2($number)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "<pre>";
        for ($j = 1; $j <= $number - $i; $j++) {
            echo "&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "* ";
        }
    }
}
