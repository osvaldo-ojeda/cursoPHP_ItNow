<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";

$usuarios = new Usuario();
$id = $_GET["idUsuario"];
$getUsuario = $usuarios->getUsuario($id);

?>
<main>
    <h2>Formurario para editar un usuario</h2>
    <form action="modificarUsuario.php?id=<?=$id?>" method="post">
        <input class="input" type="text" placeholder="Nombre" name="nombre" value="<?= $getUsuario["nombre"]; ?>">
        <input class="input" type="text" placeholder="Apellido" name="apellido" value="<?= $getUsuario["apellido"]; ?>">
        <button class="crear">Modificar</button>
    </form>
</main>
<?php
include_once "includes/footer.php";
?>