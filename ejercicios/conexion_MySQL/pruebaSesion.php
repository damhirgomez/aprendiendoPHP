<?php
session_start();

if (isset($_SESSION["usuario"])) {
    echo "Sesion iniciada"."<br>";
    echo $_SESSION["usuario"]." status: ".$_SESSION["status"];
} else {
    echo "Sesion no iniciada";
}

?>
