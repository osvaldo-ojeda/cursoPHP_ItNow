<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";
$usuario = new Usuario();
$usuarioLogeado = $usuario->login();


echo '<pre>';
print_r($_SESSION["usuarioLogeado"]);
echo '</pre>';


$mensaje = "No se pudo crear un usuario";

// $crearUsuario && $mensaje = "Usuario creado con exito"

?>
<main>
    <!-- <h2><?= $mensaje ?></h2> -->
    <h1>login</h1>
</main>
<?php
include_once "includes/footer.php";
?>