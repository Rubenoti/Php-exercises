<!-- Detectar si un numero es palindromo -->

$string = $_GET ["param1"];

if ($string === strrev($string)) {
echo "Es palindromo";
} else {
echo "No es palindromo";
}