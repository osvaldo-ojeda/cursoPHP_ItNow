<?php
include "Personajes.php";
$id = $_GET["idPersonaje"];
$personaje = Personajes::getPersonaje($id);


// echo '<pre>';
// print_r($personaje);
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curl</title>
</head>

<body>
    <h1>Pedidos a una api</h1>

    <?php

    ?>
    <div class="card">
        <img src="<?= $personaje["image"]; ?>" alt="Avatar">
        <div class="container">
            <h4><b><?= $personaje["name"]; ?></b></h4>
            <p><?= $personaje["status"]; ?></p>
        </div>
    </div>
    <?php
    ?>
</body>

</html>