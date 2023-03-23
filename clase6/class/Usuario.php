<?php
require "Connection.php";
class Usuario
{
    private $id;
    private $nombre;
    private $apellido;

    function getUsuarios()
    {
        $db = Connection::connect();
        $sql = "SELECT id, nombre, apellido FROM usuarios";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $usuarios = $stmt->fetchAll();
        return $usuarios;
    }
    function getUsuario($id)
    {
        $db = Connection::connect();
        $sql = "SELECT id, nombre, apellido FROM usuarios WHERE id=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $usuarios = $stmt->fetch();
        return $usuarios;
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
