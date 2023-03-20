<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase1</title>
</head>

<body>
    <h1>Clase 1 </h1>

    <h2>Tipos de variables</h2>

    <?php

    $nombre = "Osvaldo"; //Esto es una cadena o string ;
    var_dump($nombre);
    echo "<br> me llamo $nombre";
    echo "<br>";

    $edad = 36; //Esto es un dato tipo number 
    var_dump($edad);
    echo "<br> tengo $edad";
    echo "<br>";

    $altura = 1.65; // eto es un dato tipo float, pero en realidad no existe, el original el double
    var_dump($altura);
    echo "<br>mido $altura";
    echo "<br>";

    $casado = true; //esto es un dato tipo boolean
    var_dump($casado);
    echo "<br> Estoy casado " . $casado;

    echo "<br><h3> Hola me llamo  $nombre, tengo $edad años, mido $altura y estoy casado $casado</h3>";
    ?>
    <h2><?= "Hola me llamo  $nombre, tengo $edad años, mido $altura y estoy casado $casado";
        ?></h2>

    <h2>Operadores</h2>
    <?php
    #operadore logicos
    $a = true;
    $b = true;
    # and ó &&
    # T AND T= T
    # T AND F= F
    # F AND T= F
    # F AND F= F
    var_dump($a and $b);
    var_dump($a && $b);
    echo "<br>";

    # or ó || inclusivo 
    #T OR T= T
    #T OR F= T
    #F OR T= T
    #F OR F= F

    var_dump($a or $b);
    var_dump($a || $b);
    echo "<br>";

    # xor es un or pero  exclusivo 
    #T XOR T= F
    #T XOR F= T
    #F XOR T= T
    #F XOR F= F

    var_dump($a xor $b);
    echo "<br>";


    # ! negacion

    var_dump(!$a);
    echo "<br>";
    #operador de igualdad
    $x = 1;
    $y = "1";
    var_dump($x == $y);
    echo "<br>";

    # comparacion de identidad
    var_dump($x === $y);
    echo "<br>";

    # comparacion de diferencia
    var_dump($x != $y);
    echo "<br>";
    
    # comparacion de diferencia
    var_dump($x !== $y);
    echo "<br>";


















    ?>


</body>

</html>