<?php
require "Connection.php";
class Usuario
{
    private $id;
    private $nombre;
    private $apellido;

    function getUsuarios()
    {
        $db=Connection::connect();
        $sql="SELECT id, nombre, apellido FROM usuarios";
        $stmt =$db->prepare($sql);
        $stmt->execute();
        $usuarios=$stmt->fetchObject();
        return $usuarios;
    }
    function getUsuario()
    {
    }
    function  createUsuario()
    {
    }
    function updateUsuario()
    {
    }
    function deleteUsuario()
    {
    }
}
