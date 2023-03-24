<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";

$usuarios = new Usuario();
$id = $_GET["idUsuario"];
$getUsuario = $usuarios->getUsuario($id);
// echo "<pre>";
// print_r($getUsuario);
// echo "</pre>";


?>
<main>
    <h2>Vista de usuario</h2>
    <div class="car_container">
        <?php

        ?>
        <div class="card">
            <img src="https://www.blexar.com/avatar.png" alt="Avatar">
            <div class="container">
                <h4><b><?= $getUsuario["nombre"]; ?></b></h4>
                <p><?= $getUsuario["apellido"]; ?></p>
                <button class="modificar"><a href="formModificarUsuario.php?idUsuario=<?= $getUsuario["id"] ?>">Modificar</a></button>
                <button class="eliminar"><a href="eliminarUsuario.php?idUsuario=<?=$id?>">Eliminar</a></button>
            </div>
        </div>
        <?php

        ?>
    </div>
</main>
<?php
include_once "includes/footer.php";
?>