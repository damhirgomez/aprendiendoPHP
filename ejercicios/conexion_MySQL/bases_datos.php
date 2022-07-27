<?php

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$password = "";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password); // se crea la conexion
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programacion', 'foto.jpg')";// insertar un datos en sql
    // $conexion->exec($sql); // se ejecuta la consulta
    $seleccionDatos = "SELECT * FROM `fotos`"; // seleccionar todos los datos de la tabla
    $setencia = $conexion->prepare($seleccionDatos); // se prepara la consulta
    $setencia->execute(); // se ejecuta la consulta
    $resultado = $setencia->fetchAll(); // se guardan los datos en un array
    echo "<pre>";
    // print_r($resultado); // se imprime el array
    echo  "<br>";
    foreach($resultado as $fila){
        print_r($fila['id']."<br>"); // se imprime el id
    }
    echo "</pre>";
   
    echo "Conexion exitosa";

}catch(PDOException $e){
    echo "Conexion fallida".$e;

}




?>