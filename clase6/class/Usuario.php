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
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $db = Connection::connect();
        $sql = "INSERT INTO usuarios(nombre, apellido) VALUES (:nombre,:apellido) ";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        // if ($stmt->execute()) {
        //     return true;
        // }
        // return false;
        return $stmt->execute() ? true : false;
    }
    function updateUsuario()
    {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $db = Connection::connect();
        $sql = "UPDATE usuarios(nombre, apellido) VALUES (:nombre,:apellido) ";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        // if ($stmt->execute()) {
        //     return true;
        // }
        // return false;
        return $stmt->execute() ? true : false;
    }
    function deleteUsuario()
    {
    }
}
