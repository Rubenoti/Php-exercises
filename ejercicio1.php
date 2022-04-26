<!--Crear un fichero php que reciba el titulo como parametro GET y en bae a eso que añada el contenido dentro
de la etiqueta <h1></h1> del documento HTML -->

<?php

$titulo = $_GET['titulo'];
echo "<h1>$titulo</h1>";
