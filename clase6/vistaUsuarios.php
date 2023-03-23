<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";

$usuarios = new Usuario();
$getUsuarios = $usuarios->getUsuarios();
// echo "<pre>";
// print_r($getUsuarios);
// echo "</pre>";

?>
<main>
    <h2>Vista de usuarios</h2>
    <div class="car_container">
        <?php
        foreach ($getUsuarios as $usuario) {
        ?>
            <div class="card">
                <img src="https://www.blexar.com/avatar.png" alt="Avatar">
                <div class="container">
                    <h4><b><?= $usuario["nombre"]; ?></b></h4>
                    <p><?= $usuario["apellido"]; ?></p>
                    <button class="ver"> <a href="vistaUsuario.php?idUsuario=<?= $usuario["id"]; ?>">Ver</a> </button>
                </div>
            </div>
        <?php
        }
        ?>

        <!-- <div class="card">
            <img src="https://www.blexar.com/avatar.png" alt="Avatar">
            <div class="container">
                <h4><b>John Doe</b></h4>
                <p>Architect & Engineer</p>
            </div>
        </div>
        <div class="card">
            <img src="https://www.blexar.com/avatar.png" alt="Avatar">
            <div class="container">
                <h4><b>John Doe</b></h4>
                <p>Architect & Engineer</p>
            </div>
        </div> -->
    </div>
</main>
<?php
include_once "includes/footer.php";
?>