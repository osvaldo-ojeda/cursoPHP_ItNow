<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";

// $usuarios = new Usuario();
// $id = $_GET["idUsuario"];
// $getUsuario = $usuarios->getUsuario($id);
// echo "<pre>";
// print_r($getUsuario);
// echo "</pre>";


?>
<main>
    <h2>Formurario para crear un usuario</h2>
    <form action="crearUsuario.php" method="post">
        <input class="input" type="text" placeholder="Nombre" name="nombre">
        <input class="input" type="text" placeholder="Apellido" name="apellido">
        <button class="crear">Crear</button>
    </form>
</main>
<?php
include_once "includes/footer.php";
?>