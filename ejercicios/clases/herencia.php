<?php
class persona {

    public $nombre; // se puede acceder desde fuera de la clase
    private $apellido; // solo se puede acceder desde la clase
    protected $edad; // solo se puede acceder desde la clase y las clases que heredan

    function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
        
    public function asignarNombre($Nuevonombre) {
        $this->nombre = $Nuevonombre;
    }

    public function asignarApellido($Nuevoapellido) {
        $this->apellido = $Nuevoapellido;
    }

    public function mostrarNombre() {
        echo $this->nombre;
    }

    public function mostrarApellido() {
        echo $this->apellido;
    }

    public function mostrarEdad() {
        echo $this->edad;
    }

    public function asignarEdad($Nuevaedad) {
        $this->edad = $Nuevaedad;
    }
}

class Trabajador extends persona {

    public $puesto;
    public function asignarPuesto($Nuevopuesto) {
        $this->puesto = $Nuevopuesto;
    }
    public function mostrarPuesto() {
        echo $this->puesto;
    }

    public static function cambiarNombre($nombre) {
        echo "El nombre es: " . $nombre;
    }
}
$objAlumno = new persona(   "Juan", "Perez", 20);
$objAlumno->asignarNombre("Juan");
$objAlumno->asignarApellido("Perez");
$objAlumno->mostrarNombre();
$objAlumno->mostrarApellido();
$objAlumno->asignarEdad(20);
$Trabajador = new Trabajador(   "Juan", "Perez", 20);
$Trabajador->asignarNombre("Juan");
$Trabajador->asignarApellido("alberto");
$Trabajador->mostrarNombre();
$Trabajador->mostrarApellido();
$Trabajador->asignarEdad(25);
$Trabajador->mostrarEdad();
$Trabajador->asignarPuesto("Programador");
$Trabajador->mostrarPuesto();

Trabajador::cambiarNombre("andres"); // llama a la funcion static de la clase sin tener que instanciarla



?>