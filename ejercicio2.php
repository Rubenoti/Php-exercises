<!--Crear un codio que pasado un numero 
nos diga si es par o impar -->

<?php
$numero = isset($_GET["numero"]) ? $_GET["numero"] : 0;


if ($numero % 2 == 0) {
    echo "El numero es par";
} else {
    echo "El numero es impar";
}
