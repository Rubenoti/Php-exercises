<!-- Enunciado:
Dado el siguiente array:
    $colores = ['blanco', 'verde, 'rojo'];
Escribir un script que muestre los colores de la2 siguientes maneras:
* Separados por comas
ej:   blanco, verde, rojo
* Como una lista html, estando los elementos ordenados alfabéticamente
ej:
<ul>
    <li>blanco</li>
    <li>rojo</li>
    <li>verde</li>
</ul>
Objetivo:

Familiarizarse con el tratamiento de arrays -->

<?php

$colores = ['blanco', 'verde', "rojo"];

echo $colores[0] . ", " . $colores[1] . ", " . $colores[2], " <br>";

$result = implode(", ", $colores);

echo $result;

sort($colores);

foreach ($colores as $color => $valor) {
    echo "<li>$valor</li><br>";
};
