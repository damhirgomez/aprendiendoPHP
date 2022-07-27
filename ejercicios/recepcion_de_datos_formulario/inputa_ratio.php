<?php

$txtName = "";
$radioGroup = "";
$checkjava = "";
$checkphp = "";
$checkpython = "";

if ($_POST){

    $txtName = (isset($_POST["txtName"])) ? $_POST["txtName"] : "";
    $radioGroup = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : "";
    $checkjava = (isset($_POST["checkjava"])=="si") ? "checked" : "";
    $checkphp = (isset($_POST["checkphp"])=="si") ? "checked" : "";
    $checkpython = (isset($_POST["checkpython"])=="si") ? "checked" : "";

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
    <strong>Tu lenguaje es: </strong> <?php echo $radioGroup; ?>
    <?php } ?>
    <form action="inputa_ratio.php" method="post">
        <label for="txtName">Nombre: </label>
        <input value="<?php echo $txtName ?>" type="text" name="txtName">
        <label for="lenguage">html</label>
        <input type="radio" name="lenguaje" value="html" <?php echo ($radioGroup=="html")?"checked":""; ?> >
        <label for="lenguage">css</label>
        <input type="radio" name="lenguaje" value="css" <?php echo ($radioGroup=="css")?"checked":""; ?>>
        <label for="lenguage">js</label>
        <input type="radio" name="lenguaje" value="js" <?php echo ($radioGroup=="js")?"checked":""; ?>>
        <p>Estas aprendiendo....</p>
        <label for="checkjava">Java</label>
        <input type="checkbox" <?php echo $checkjava; ?>name="checkjava" id="" value="si">
        <label for="checkphp">PHP</label>
        <input type="checkbox" <?php echo $checkphp; ?>name="checkphp" id="" value="si">
        <label for="checkpython">Python</label>
        <input type="checkbox" <?php echo $checkpython; ?>name="checkpython" id="" value="si">
        <br>
        <input type="submit" value="EnviarInfo">
    </form>
</body>
</html>