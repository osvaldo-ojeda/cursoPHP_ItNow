<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";

?>
<main>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <input class="input" type="text" placeholder="Nombre" name="nombre">
        <input class="input" type="text" placeholder="Apellido" name="apellido">
        <button class="crear">Loin</button>
    </form>
</main>
<?php
include_once "includes/footer.php";
?>