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
