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
    function updateUsuario($id)
    {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $db = Connection::connect();
        $sql = "UPDATE usuarios SET nombre=:nombre, apellido =:apellido WHERE id=:id";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }
    function deleteUsuario($id)
    {
        $db = Connection::connect();
        $sql = "DELETE FROM usuarios WHERE id=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            header("refresh:3; url=index.php");
            return true;
        }
        return false;
    }

    function login()
    {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $db = Connection::connect();
        $sql = "SELECT id, nombre, apellido FROM usuarios WHERE nombre=:nombre AND apellido=:apellido";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        if ($stmt->execute()) {
            $usuario = $stmt->fetch();
            session_start();
            $_SESSION["usuarioLogeado"] = $usuario["id"];
            header("refresh:3; url=index.php");
        }

        return false;
    }

    function logout()
    {
        session_destroy();
        header("refresh:3; url=index.php");
    }

    

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */
    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }
}
