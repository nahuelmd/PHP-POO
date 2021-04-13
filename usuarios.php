<?php
class Usuarios
{
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;
    //creamos el constructor
    function __construct($nom, $apell, $fn)
    {
        $this->nombre = $nom;
        $this->apellido = $apell;
        $this->fecha_nacimiento = $fn;
    }
    //metodos evaluacion
    public function fecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }
    private function calcular_edad()
    {
        $fecha_nacimiento = new DateTime("$this->fecha_nacimiento");
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento);
        echo "<p>Esta es tu edad: " . $edad->y . "</p>";
    }
    //metodo calcular edad
    protected function imprime_caracteristicas()
    {
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Apellido:" . $this->apellido . "</p>";
        echo "<p>Fecha de nacimiento: " . $this->fecha_nacimiento() . "</p>";
        echo $this->calcular_edad();
    }
}