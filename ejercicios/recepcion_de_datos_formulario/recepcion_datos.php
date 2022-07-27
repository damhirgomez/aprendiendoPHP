<?php

$txtName = "";

if ($_POST){

    $txtName = (isset($_POST["txtName"])) ? $_POST["txtName"] : "";

}








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <?php if($_POST){ ?>
    <strong>Hola: </strong> <?php echo $txtName; ?>
    <?php } ?>
    <form action="recepcion_datos.php" method="post">
        <input value="<?php echo $txtName ?>" type="text" name="txtName">
        <input type="submit" value="EnviarInfo">
    </form>
</body>
</html>