<?php

$frutas = array("manzana", "pera", "uva");
// var_dump($frutas);
// echo "<br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

foreach ($frutas as $key => $fruta) { // $key es el índice de la fruta y fruta es el valor de la fruta en ese índice
    echo $key . " " . $fruta . "<br>";
}

// array asociativo
$personas = array(
    "nombre" => "damhir",
    "apellido" => "sanchez",
    "edad" => "21"
);
echo "<br>";
print_r($personas);
?>