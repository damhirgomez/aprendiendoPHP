<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $suma = $num1 + $num2;
    echo "La suma es: ".$suma;

    $resta = $num1 - $num2;
    echo "<br>La resta es: ".$resta;

    $multiplicacion = $num1 * $num2;
    echo "<br>La multiplicación es: ".$multiplicacion;
    $resto = $num1 % $num2;
    echo "<br>El resto es: ".$resto;

    $division = $num1 / $num2;
    echo "<br>La división es: ".$division;
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
    
    <form action="practica3.php" method="POST">
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