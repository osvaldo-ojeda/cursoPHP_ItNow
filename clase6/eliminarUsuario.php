<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";
$usuario = new Usuario();
$id = $_GET["idUsuario"];
$eliminarUsuario = $usuario->deleteUsuario($id);
$mensaje = "No se pudo eliminar un usuario";
$eliminarUsuario && $mensaje = "Usuario eliminado con exito"
?>
<main>
    <h2><?= $mensaje ?></h2>
    <h2>Hola</h2>
</main>
<?php
include_once "includes/footer.php";
?>