<pre>
<?php
//forma array 1
$array = array("camiseta", "pantalon", "medias");

// var_dump($array);
// echo $array[1];
// echo "<br>";
// forma array 2 y mas usada tambien se llama forma implicita
$array2 = [
    "perro" => "kuka",
    "edad" => 2,
    "juguetes" => ["trapito", "hueso"]
];

// var_dump($array2);
// echo "<br>";
// echo $array2["edad"];
# count
// echo "\n El array tiene " . count($array2) . " elementos";

// echo "<br>";
$array2["perro"] = "canela";
// echo $array2["perro"];
$array2["apellido"] = "ojeda";
// echo "<br>";
// var_dump($array2);
array_push($array2, "marron");
// echo "<br>";
array_pop($array2);
// print_r($array2);


// ordenar de manera ascendente menor a mayor
$arrayNumeros = [2, 1, 4, 3];
sort($arrayNumeros);
// print_r($arrayNumeros);

//ordenar de manera descendente
$arrayNumeros2 = [2, 1, 4, 3];
rsort($arrayNumeros2);
// print_r($arrayNumeros2);

// remover el primer elemento de un array

array_shift($arrayNumeros2);
// print_r($arrayNumeros2);


// pasar de string a array
$nombreCompleto = "Osvaldo Ojeda";
// $nombreYapellido=explode(" ",$nombreCompleto);
// print_r($nombreYapellido);

//concatenar funciones en php
$nombre = explode(" ", $nombreCompleto);

sort($nombre) . array_shift($nombre);
// print_r($nombre);

// ---------------------------

$base = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function multiplicar($n)
{
    return $n * 2;
}
// $tabla2=array_map("multiplicar", $base);


$tabla2 = array_map(function ($n) {
    return $n * 3;
}, $base);

// print_r($tabla2);
// print_r($base);


#filter

$filtro = array_filter($base, function ($b) {
    if ($b % 2 == 0) return $b;
});
// echo "filter";
// print_r($filtro);
// print_r($base);


############ objetos

class Person
{
    //las variables dentro de los objetos se los conoce como propiedades, en este caso tienen valores por default
    public $nombre = "osvaldo";
    public $apellido = "ojeda";
}


$osvaldo = new Person();
// var_dump($osvaldo);
print_r($osvaldo);
echo $osvaldo->nombre = "Juan";
echo $osvaldo->nombre;

class Person2
{
    private $nombre;
    private $apellido;

    ## las funciones que yo declaro dentro de una clase se llaman metodos y estos en particular se llaman metodos de instancia, 
    function setName($name)
    {
        $this->nombre = $name;
    }

    function getName()
    {
        return $this->nombre;
    }
}

echo "<br>";
$xavi = new Person2();
$xavi->setName("Xavi");

// echo $xavi->apellido;

echo "Me llamo " . $xavi->getName();


// ---------------------------------

function contador(){
   static $count=0;
    echo "el contador esta en $count";
    $count++;
}

echo "<br>";
contador();
echo "<br>";
contador();
echo "<br>";
contador();
echo "<br>";
contador();




