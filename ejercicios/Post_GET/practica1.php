<?php

if ($_POST) {
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    echo "Hola ".$nombre." ".$apellido;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="practica1.php" method="post">
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" id="txtNombre">
        <br>
        <label for="txtApellido">Apellido:</label>
        <input type="text" name="txtApellido" id="txtApellido">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>