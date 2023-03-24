<?php
include_once "includes/header.php";
include_once "includes/nav.php";
// require "class/ejMysqli.php"
// require "class/Connection.php";
// Connection::connect();

session_start();
// echo '<pre>';
// print_r($_SESSION["usuarioLogeado"]);
// echo '</pre>';


?>
<main>
    <h1>soy el index</h1>

    <?php
    if (isset($_SESSION["usuarioLogeado"])) {
    ?>
        <button><a href="logout.php">logout</a></button>
    <?php
    } else {
    ?>
        <button><a href="formLogin.php">Login</a></button>
    <?php
    }

    ?>

    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus architecto dolorem ratione ex assumenda sunt mollitia porro cum reiciendis autem at accusamus expedita quas, explicabo, sit veritatis temporibus error soluta?
    </p>
</main>
<?php
include_once "includes/footer.php";
?>