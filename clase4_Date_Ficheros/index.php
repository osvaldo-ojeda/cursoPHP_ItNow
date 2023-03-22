<?php
// echo strlen("hola");
// echo str_word_count("Hello world!");

#### fechas en php 

echo "Hoy es " . date("Y/m/d") . "<br>";
echo "Hoy es " . date("d/m/Y") . "<br>";
echo "Hoy es " . date("m/d/Y") . "<br>";
echo "Hoy es " . date("m/d/y") . "<br>";
echo "Hoy es " . date("D/M/Y") . "<br>";
echo "Hoy es " . date("D") . "<br>";
echo "Hoy es " . date("d") . "<br>";
echo "Hoy es " . date("w") . "<br>";
echo "Hoy es " . date("l") . "<br>";

$fecha = date("d/m/Y");
var_dump($fecha)
?>

<br>

&copy; 2022-<?= date("Y"); ?>

<br>
<!-- --------------------------- -->

<?php

$file = fopen("info.txt", "r");
$fileread = fread($file, filesize("info.txt"));
echo "<h1>$fileread</h1>";
echo "<br>";

$file = fopen("info.txt", "a") or die("no estel archivo");
$nuevoTexto = "\n que bueno";
fwrite($file, $nuevoTexto);

$file = fopen("info.txt", "r");
$fileread = fread($file, filesize("info.txt"));
echo "<h1>$fileread</h1>";
echo "<br>";

fclose($file);

echo readfile("info.txt");