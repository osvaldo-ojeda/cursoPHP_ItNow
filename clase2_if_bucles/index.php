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
