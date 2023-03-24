<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";
session_start();
$logut = new Usuario();
$logut->logout()
?>
<main>
    <h2>Chauuuuuuu</h2>
</main>
<?php
include_once "includes/footer.php";
?>