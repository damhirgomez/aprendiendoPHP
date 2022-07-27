<?php


$escribirArchivo = "archivo.txt";
$contenidoArchivo = "Hola mundo";

$CrearArchivo = fopen($escribirArchivo, "w");
fwrite($CrearArchivo, $contenidoArchivo);
fclose($CrearArchivo);
$leerArchivo = fopen($escribirArchivo, "r");
$content = fread($leerArchivo, filesize($escribirArchivo));
echo $content;


?>