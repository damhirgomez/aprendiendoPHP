<?php

$jsonContenido ='[

    {
        "nombre": "Juan",
        "apellido": "Perez",
        "edad": "20"
    },
    {
        "nombre": "Pedro",
        "apellido": "Gonzalez",
        "edad": "30"
    },
    {
        "nombre": "Maria",
        "apellido": "Lopez",
        "edad": "40"
    }


]';

$resultado = json_decode($jsonContenido);// true para que devuelva un array
echo "<pre>";
print_r($resultado);
// foreach ($resultado as $key => $value) {
//     echo $value['nombre'] . " " . $value['apellido'] . " " . $value['edad'] . "<br>";
// }
foreach ($resultado as $key) {
    echo ($key->nombre) . " " . ($key->apellido) . " " . ($key->edad) . "<br>";
}
echo "</pre>";
?>