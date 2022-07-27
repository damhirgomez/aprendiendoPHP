<?php
session_start();

$_SESSION["usuario"] = "damhir";
$_SESSION["status"] = "logeado";

echo "Sesion iniciada"."<br>";
echo $_SESSION["usuario"]." status: ".$_SESSION["status"];



?>