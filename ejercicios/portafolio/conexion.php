<?php
class conexion {

    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $base_datos = "album";
    private $conexion;

    public function __construct(){
        try{
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->base_datos", $this->usuario, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch( PDOexception $e ){
            echo "Error: " . $e;
        }
    }

    public function insertar($sql){
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }

    public function consultar($sql){
        $resultado = $this->conexion->prepare($sql);
        $resultado->execute();
        return $resultado->fetchAll();
    }
}



?>