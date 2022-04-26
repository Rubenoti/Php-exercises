<!--Crear un código que pasado un número nos diga cuántas veces es
necesario elevarlo para que pase de 10.000
Ej: si el número es 150, el resultado es 2 => 1502 > 10.000
Ej: si el número es 5, el resultado es 6 => 56 > 10.000 -->


<?php

$numero =  isset($_GET["numero"]) ? (is_numeric($_GET["numero"]) ? $_GET["numero"] : 5) : 5;

$total = $numero;

$contador = 1;

while ($total < 10000) {
    $total = pow($numero, $contador);
}

echo "si el numero es $numero, el resultado es $contador => $total > 10000";
