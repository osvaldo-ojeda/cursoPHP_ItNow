# Introducción a los Arrays

## ¿Qué son los arrays en PHP?

Durante el desarrollo de una aplicación
podemos encontrarnos con la necesidad de
agrupar varios datos bajo un mismo nombre,
un mismo concepto. Pensemos, por ejemplo,
en un listado de alumnos con toda su
información o el registro completo de ventas.
Todos esos datos son datos que, a su vez,
contienen otros datos (el listado de alumnos
contiene el nombre, apellido, edad, curso,
división de cada alumno; y el registro de
ventas puede contener la fecha de venta y el
cliente entre otros datos).
Para resolver esa necesidad, contamos con
tipos de datos que nos permiten almacenar
varios datos bajo un mismo nombre,
llamadas arrays; ya sea una lista de
elementos consecutivos (vectores), un
conjunto de equivalencias clave/valor
(tabla asociativa), matrices completas de
dos o más dimensiones (árboles y arrays
asociativos).
Quizás estas palabras puedan parecer un
poco complejas. Sin embargo, son palabras
complejas para expresar ideas “de todos
los días”: Seguramente hayas usado una
agenda, en la que almacenas el teléfono
que corresponde a cada contacto. Esa
agenda es un array asociativo, ya que
provee una clave asociada a un valor (un
contacto asociado a un teléfono).

Más allá de los distintos nombres, tipos o clasificaciones
que podamos hacer de estas estructuras; hay una idea
central que todas comparten:

### Almacenar muchos valores bajo un único identificador.

## Arrays en PHP

Una vez comprendido qué son los arrays (un
tipo de dato) y para qué sirven (para almacenar
varios valores bajo un mismo nombre), surge
otra cuestión: ¿Cómo implementarlos en PHP?
Esta pregunta se puede responder de forma
muy sencilla si se tiene en cuenta cómo PHP
procesa los arrays. De hecho, teniendo en
cuenta eso, todos los conceptos sobre arrays
se deducen muy fácilmente.
¿Qué significa esto? Significa que PHP
simplifica la gestión de los arrays. En vez de
tener varios tipos de arrays bien definidos y
separados, tenemos un único tipo,
denominado array. Este tipo de datos es, en
esencia, una lista de pares clave/valor.

### Todo array PHP es un mapa ordenado, esto es, un tipo de datos que asocia claves con valores.

En PHP los arrays se crean mediante la
palabra reservada ‘array’ (nótese que a partir
de PHP 5.4 se puede utilizar una sintaxis más
abreviada, que es perfectamente válida).
Dentro de la definición del array (dentro de
los paréntesis o de los corchetes) se pasa a
definir cada uno de los elementos, asignando
un valor a una clave mediante el operador de
asociación (=>), siguiendo esta estructura:
clave => valor
PHP soporta cualquier tipo de dato en los
valores de cada elemento (véase la clase 1
para una lista de todos los tipos de dato
soportados)... y también en las claves.
Si bien es un tema mucho más
avanzado el introducir claves con
tipos de dato que no sean un
texto o un número, se puede
consultar a la documentación por
más información:
https://www.php.net/manual/es/language
.types.array.php

PHP asigna automáticamente una clave
(o índice) a los elementos que no tienen
asignado ya uno previamente.
Dicho índice es del tipo de datos integer
-es decir, un número entero- que empieza
en cero (0) y se incrementa -es decir,
aumenta de uno en uno- con cada nuevo
elemento del array

La primera operación que vamos a estudiar,
además de declarar el array, es acceder a cada
uno de los elementos.
Sea para un array definido con array() o con [],
sea para un array con índices definidos por el
desarrollador o no; la sintaxis para acceder a sus
elementos es siempre la misma:
array[clave]
Mediante los corchetes ( [ y ] ) podemos acceder a
un valor del array a través de su clave. Incluso en
índices no definidos (como $edades) podemos
acceder a cada elemento a través del índice (o
clave) si tenemos en cuenta que cada índice es un
número y que dicho número se incrementa con
cada nuevo elemento (primero 0, luego 1, luego 2,
luego 3 …. y así sucesivamente)

---

# Operaciones con Arrays

## Funciones para el manejo de Arrays

En esta ocasión vamos a ver operaciones
para el manejo de arrays. Muchas de estas
operaciones se denominan funciones. Una
función, para nuestros propósitos en esta
clase, es un proceso que recibe datos de
entrada y devuelve datos de salida.
Veamos ahora las siguientes operaciones
comunes al manejo de un array:

1.  Mostrar un array por pantalla (vista de
    desarrollo).

    - Muchas veces necesitamos obtener
      un detalle de lo que un array contiene
      para propósitos de prueba.
    - La función var_dump() recibe una variable de
      cualquier tipo. Al ejecutarse esta función, se mostrará
      una versión “apta para desarrollo” de la variable en
      cuestión.

2.  Agregar un nuevo elemento a un array
    asociativo (pares clave/valor).

    - ¿Cómo agregar un nuevo par
      clave/valor a un array?
    - En este caso no necesitamos ninguna función. Los
      arrays asociativos permiten agregar nuevos elementos
      asignando valor a claves que previamente no existían.
      Al hacer referencia a una clave inexistente, el
      intérprete creará dicha clave con el valor que le
      asignes.

3.  Agregar un nuevo elemento a un array con
    índices numéricos.
    - ¿Necesitas agregar un nuevo valor a
      una lista de valores?
    - La función array_push() recibe primero el array en el
      que voy a agregar el valor, y luego el valor que quiero
      agregar. Dicho valor puede ser de cualquier tipo de
      dato
4.  Comprobar si una clave existe en un array
    asociativo.

    - ¿Cómo puedo saber si un array
      asociativo contiene determinado
      elemento? ¿Un elemento se encuentra
      dentro de este array?
    - La función isset() recibe una variable o valor como
      parámetro y devuelve TRUE en caso de que dicha
      variable o valor esté definido. En nuestro caso, nos
      sirve para ver si una clave existe independientemente
      de su valor

5.  Obtener la cantidad de elementos de un array.

    - ¿Cuántos elementos tiene este array?
      ¿Cuál es su longitud?

    - La función count() recibe el array a contar, y me

    permite contar la cantidad de elementos de un array
    empezando por 1 (uno). Por ejemplo, para el array
    [1,4,5] count() devuelve 3.

6.  Buscar un valor en un array con índice numérico.
    - ¿Existe una forma de buscar un
      elemento para los arrays con índice
      numérico?
    - La función in_array() recibe dos parámetros: primero
      el valor a buscar y luego el array en el que se realizará
      la búsqueda. Esta función retorna TRUE en caso de
      encontrar el valor y FALSE en caso contrario
7.  Buscar un valor en un array asociativo.
    - ¿Cómo puedo buscar un valor y
      retornar la clave?
    - Necesito obtener el contacto asociado
      a un número de teléfono
      La función array_search() recibe primero el valor a
      buscar y luego el array. Es muy parecida con la función
      anterior, con la excepción de que, en vez de devolver
      TRUE en caso de encontrar el valor, devuelve la clave
      asociada al mismo
8.  Buscar una clave en un array.

    - En mi agenda ¿Existe el contacto
      Sebastián?
    - En este caso, isset() nos podría servir. Sin embargo,
      contamos con una función alternativa específica para
      arrays. La función key_exists() recibe primero la clave a
      buscar y luego el array en donde se realizará la
      búsqueda. Devuelve TRUE o FALSE dependiendo de si
      clave existe o no, respectivamente

9.  Quitar el último elemento de un array.
    - ¿Cómo puedo quitar el último
      elemento? Si quiero quitar el mayor
      de los elementos puedo combinar
      esta función con una que veremos
      más abajo, por ejemplo.
    - La función array_pop() recibe el array y quita el último
      elemento del mismo, sea éste asociativo o no.
10. Convertir array en texto.

    - ¿Puedo mostrar todos los valores de
      un array seguidos por coma (,)?
      ¿Cómo puedo convertir un array en
      un texto para un diferente
      procesamiento?
    - La función implode() recibe, primero, un carácter y
      luego un array. Esta función unirá cada elemento con
      el carácter introducido y retornará el texto resultante.
      Por ejemplo: el array $n = [1,2,3] al pasar por
      implode(‘-’, $n) se transformará en ‘1-2-3’

11. Convertir texto en array.
    - ¿Puedo dividir un texto mediante un
      carácter para procesarlo como array?
      Esto es especialmente útil cuando
      necesitamos procesar las URL
    - La función explode() recibe primero el carácter que
      servirá de separador, y luego el texto a dividir. Esta
      función cortará el texto en cada ocurrencia del
      carácter introducido (cada vez que aparezca) y
      retornará un array con las partes resultantes
12. Ordenar un array con índices numéricos.
    - ¿Cómo ordenar un array por sus
      valores?
    - Las funciones sort() y rsort() sirven para ordenar el
      array. Ambas reciben el array a ordenar y no retornan
      nada. Sencillamente lo ordenan y listo. La única
      diferencia es el tipo de ordenamiento que se realiza
      (de forma ascendente o descendente)
13. Ordenar un array asociativo.

- ¿Cómo puedo ordenar un array
  asociativo?
- Las funciones asort() y arsort() se utilizan exactamente
  igual que las anteriores y se comportan también igual.
  La única diferencia es que asort() y arsort() son
  funciones que ordenan los elementos y mantienen las
  asociaciones. En palabras más simples: son la versión
  apta para arrays asociativos de las dos funciones
  anteriores

---

---

# Programación Orientada a Objetos con PHP

## Clases y Objetos en PHP

# Definiendo Clases

Una clase es una colección de variables y funciones.

Se puede definir a una clase como una fábrica de objetos.

Cuando aún no se ha instanciado un objeto y tenemos que hacer referencia a este dentro de la clase se puede utilizar el operador $this

# Variables de la Clases

Las clases pueden almacenar estados internos, o sea pueden guardar valores. Para los mismos utilizamos variables, las variables se definen dentro de la clase, para indicar que pertenecen a ella. Cuando hablamos de definir la variable, no nos referimos al tipo de dato: integer, string, datetime, etc. Como PHP es un lenguaje débilmente tipado, no se definen los tipos de datos de las variables. Sino que declaramos que una variable pertenece a la clase. Finalmente para declarar una variable dentro de la clase, utilizamos la palabra reservada de PHP: public. Más adelante veremos que hay otras formas de declarar una variable como protected o private y veremos las diferencias entre cada una de ella.

### En conclusión:

- Las variables locales de una clase se definen con el operador public.
- Advertencia: Es obligatorio utilizar el operador public para definir variables dentro de las clases.
- En el siguiente ejemplo vemos que la clase Persona tiene dos variables: nombre y apellido.

---

    class Persona
    {
        public  $nombre;
        public  $apellido;
    }

## Métodos y Propiedades

En la nomenclatura del paradigma de objetos, todas las variables definidas dentro de la clase se llaman propiedades y todas las funciones definidas dentro de la clase se llaman métodos. A partir de ahora y hasta el final del curso, cada vez que no referimos a una variable de la clase la llamaremos propiedad y cada vez que nos referimos a una función la llamaremos método.

En conclusión, una clase posee estados internos y comportamiento. Los estados internos se refieren a las propiedades (las variables) que pueden almacenar información (estados que pueden cambiar), por eso son variables, porque varían sus estados y los mismos son internos porque están definidos dentro de la clase. Al comportamiento, se refiere a los métodos (funciones), las acciones que puede tomar la clase, por eso siempre los métodos deben tener nombre de verbos.

En el siguiente ejemplo la clase Persona tiene dos propiedades (nombre y apellido) y un método (verDatos). Los métodos (las funciones) también se los puede predefinir con la palabra reservada public, aunque no es necesario porque todos los métodos por defecto son públicos. Más adelante veremos también definiciones de métodos protected y private y sus diferencias.

    class Persona

    {
        public  $nombre;
        public  $apellido;
        public  function verDatos(){
              echo "$this->nombre,<B>$this->apellido</B>";
        }
    }

## Estructura de una Clase

Normalmente todas las propiedades de la clase se definen al principio y luego se definen todos los métodos uno abajo del otro. Si bien PHP permite mezclar el orden en que realizamos las definiciones, para un mejor entendimiento y trabajo en equipo se acostumbra a utilizar esta forma:

## Variables locales de una Función

Todas las variables que se definan / utilicen dentro de un método, pasan a ser variables locales a la funciona. No son propiedades de la clase.

    class Persona
     {
        public $nombre;
        public $apellido;
        function imprimir()
        {
              $x = 10;
              echo $this->nombre . ", " . $this->apellido. "<br>";
              echo $x;
        }
      }

En el ejemplo anterior $x no es una propiedad de la clase Persona sino que es una variable local de la función imprimir.

## Instanciando Objetos 
Un objeto es una variable definida a través de una clase. El proceso de definición de un objeto (creación del objeto) a través de una clase se llama instanciar. Luego el objeto ya creado, es una instancia de la clase la cual se utilizó para su creación.

Para instanciar (crear) un objeto a través de una clase se utiliza el operador new. En el siguiente ejemplo vemos como la variable $obj, se crea de la clase Persona

    $obj = new Persona();

    $obj->nombre = ‘Juan’;

    $obj->apellido = ‘Perez;

    $obj->verDatos();

Como hemos mencionado en el primer capítulo de teoría de objetos. Las clases por sí sola no hacen nada. Las clases se definen como estructura y luego se crean los objetos como instancias de la clase. Podemos crear varios objetos a raíz de la misma clase.


    $o1 = new Persona();

    $o1->nombre = ‘Juan’;

    $o1->apellido = ‘Perez;

    $o1->verDatos();

    
    $o2 = new Persona();

    $o2->nombre = ‘Martin’;

    $o2->apellido = ‘Rodrigez;

    $o2->verDatos();


En el ejemplo anterior, definimos dos variables distintas $o1 y $o2. Ambas son objetos de la clase Persona. O sea tienen la estructura de una Persona (tal como la definimos en la clase) con sus estados internos (propiedades: nombre y apellido) y comportamiento métodos (verDatos). De esta manera podemos ver más claramente y entender que una clase es una fábrica de objetos. En conclusión:

El operador new crea un objeto a partir de una clase.
El operador -> hace referencia a una variable o función de un objeto
Cuando se hace referencia a una variable del objeto con el operador -> no se debe anteponer el prefijo $ característico de las variables en PHP.
EJEMPLO CORRECTO:  $obj->nombre = ‘Juan’;
EJEMPLO INCORRECTO: $obj->$nombre = ‘Juan’;

