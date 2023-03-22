<?php

class Persona
{
    private $nombre;
    private $apellido;
    private $edad;


    function setData($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    function getData()
    {
        return [$this->nombre, $this->apellido, $this->edad];
    }
}
##herencia
class Alumno extends Persona
{
    private $curso;
    // function setDataAlumno($nombre, $apellido, $edad, $curso)
    // {
    //     Persona::setData($nombre, $apellido, $edad);
    //     $this->curso = $curso;
    // }
    function setCurso($curso)
    {
        $this->curso = $curso;
    }

    function getData()
    {
        $alumno = Persona::getData();
        array_push($alumno, $this->curso);
        return $alumno;
    }
}

// Forma 1
// class Mascota
// {
//     private $nombre;
//     private $color;
//     function Mascota($nombre, $color)
//     {
//         $this->nombre = $nombre;
//         $this->color = $color;
//     }
// }
// forma 2

class Mascota
{
    private $nombre;
    private $color;
    const EDAD = 2;
    function __construct($nombre, $color)
    {
        $this->nombre = $nombre;
        $this->color = $color;
    }

    function getData()
    {
        return [$this->nombre, $this->color, $this::EDAD];
    }

    function __destruct()
    {
        echo "objeto destruido";
    }

    static function saludar()
    {
        echo "hola tengo " . Mascota::EDAD;
    }
}
