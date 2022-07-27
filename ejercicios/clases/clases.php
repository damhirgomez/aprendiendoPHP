<?php
class persona {

    public $nombre; // se puede acceder desde fuera de la clase
    private $apellido; // solo se puede acceder desde la clase
    protected $edad; // solo se puede acceder desde la clase y las clases que heredan

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

$objAlumno = new persona(   "Juan", "Perez", 20);
$objAlumno->asignarNombre("Juan");
$objAlumno->asignarApellido("Perez");
$objAlumno->mostrarNombre();
$objAlumno->mostrarApellido();
$objAlumno->asignarEdad(20);
$objAlumno->mostrarEdad();




?>