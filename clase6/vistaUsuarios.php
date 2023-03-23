<?php
include_once "includes/header.php";
include_once "includes/nav.php";

require "class/Usuario.php";

$usuarios = new Usuario();
$getUsuarios = $usuarios->getUsuarios();
echo "<pre>";
print_r($getUsuarios);
echo "</pre>";

?>
<main>
    <h1>soy la vista de usuarios</h1>
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus architecto dolorem ratione ex assumenda sunt mollitia porro cum reiciendis autem at accusamus expedita quas, explicabo, sit veritatis temporibus error soluta?
    </p>
</main>
<?php
include_once "includes/footer.php";
?>