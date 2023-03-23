<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";
$usuario = new Usuario();
// $crearUsuario = $usuario->createUsuario();
// echo "<pre>";
// print_r($crearUsuario);
// echo "</pre>";
// $mensaje = "No se pudo crear un usuario";
// if ($crearUsuario) {
//     $mensaje = "Usuario creado con exito";
// }
// $crearUsuario && $mensaje = "Usuario creado con exito"

?>
<main>
    <!-- <h2><?= $mensaje ?></h2> -->
    <h2>Hola</h2>
</main>
<?php
include_once "includes/footer.php";
?>