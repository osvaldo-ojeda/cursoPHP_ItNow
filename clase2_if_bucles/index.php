<?php

#condicional if
$n1 = 4;
$n2 = 2;
if ($n1 <= $n2) {
    echo "hola";
}

echo "<hr/>";
#condicional if anidado 

if ($n1 <= $n2) {
    if ($n1 === 3) echo "El numero es $n1";
    echo "hola";
}

echo "<hr/>";
#concatenacion de if
if ($n1 <= $n2) {
    echo "hola";
} elseif ($n1 === 3) {
    echo "El numero es $n1";
}

# condicional if/else
if ($n1 <= $n2) {
    echo "hola";
} elseif ($n1 === 3) {
    echo "El numero es $n1";
} else {
    echo "el numero es $n1 ";
}
echo "<hr/>";
# switch
$op = "multiplicar";
$numero1 = 4;
$numero2 = 6;
$res = 0;
switch ($op) {
    case 'sumar':
        $res = $numero1 + $numero2;
        echo $res;
        break;
    case 'restar':
        $res = $numero1 - $numero2;
        echo $res;
        break;
    case 'dividir':
        $res = $numero1 / $numero2;
        echo $res;
        break;
    case 'multiplicar':
        $res = $numero1 * $numero2;
        echo $res;
        break;
    default:
        echo "la operacion es incorrecta";
        break;
}

// ---------------------------------------

#while
echo "<hr/>";
$a = 0;
while ($a <= 10) {
    echo "<br> $a";
    // $a++;
    $a = $a + 2;
}
echo "<hr/>";
#dowhile
$a = 1;
do {
    echo "<br> $a";
    $a++;
} while ($a <= 20);
echo "<hr/>";
#for
$x = 0;
for ($i = 10; $i >= $x; $i = $i - 2) {
    echo "<br> $i";
}
// -----------------------------------

echo "<hr/>";
// function
$nombre = "osvaldo";

function saludar($name = "mesi")
{
    echo "Hola $name";
}

saludar("chayane");
echo "<hr/>";
saludar($nombre);
saludar();

echo "<hr/>";

function decirHola()
{
    echo "hola";
}
decirHola();

// funcione anonimas

$funcionAnonima = function () {
    echo "soy una funcion anonima";
};

echo "<hr/>";


// hacer funcion que imprima del 0 al 20 y que en el numero par no imprima el numero, sino que imprima la palaque se le pase pro parametro y si no le paso un parametro que imprima "soy de Mesi"


