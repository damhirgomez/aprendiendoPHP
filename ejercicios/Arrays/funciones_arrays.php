<?php

$frutas = array("manzana", "pera", "uva");

array_push($frutas, "naranja");


print_r($frutas);

$input = array(12, 10, 9);
echo "<br>";
print_r($input);
$result = array_pad($input, 5, 0);
// el resultado es array(12, 10, 9, 0, 0)
echo "<br>";
print_r($result);

$result = array_pad($input, -7, -1);
// el resultado es array(-1, -1, -1, -1, 12, 10, 9)
echo "<br>";
print_r($result);
$result = array_pad($input, 2, "noop");
echo "<br>";
// sin relleno
print_r($result);

?>