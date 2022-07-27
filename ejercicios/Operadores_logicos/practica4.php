<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 > $num2) {
        echo "El numero mayor es: " . $num1;
    } else {
        echo "El numero mayor es: " . $num2;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos
        
    </title>
</head>
<body>
    
    <form action="practica4.php" method="POST">
    <label for="num1">Numero1:</label>
    <input type="text" name="num1" placeholder="Ingrese el primer numero">
    <br>
    <label for="num2">Numero2:</label>
    <input type="text" name="num2" placeholder="Ingrese el segundo numero">
    <br>
    <input type="submit" value="Calcular">
    </form>
</body>
</html>