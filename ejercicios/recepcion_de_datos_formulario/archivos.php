<?php

if ($_POST){
    print_r($_POST);
    print_r($_FILES["archivo"]["name"]);
    move_uploaded_file($_FILES["archivo"]["tmp_name"],$_FILES["archivo"]["name"]);//mover el archivo a la carpeta
} else {
    echo "No se recibieron datos";
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
    <form action="archivos.php" enctype="multipart/form-data" method="post">

        imagen:
        <input type="file" name="archivo">
        <br>
        <input type="submit" name="Enviar" value="enviar informacion">



    </form>
</body>
</html>