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

- El operador new crea un objeto a partir de una clase.
- El operador -> hace referencia a una variable o función de un objeto
- Cuando se hace referencia a una variable del objeto con el operador -> no se debe anteponer el prefijo $ característico de las variables en PHP.
     - EJEMPLO CORRECTO:  $obj->nombre = ‘Juan’;
     - EJEMPLO INCORRECTO: $obj->$nombre = ‘Juan’;

# Herencia 
Operador extends 
Las definiciones de clases en PHP permiten heredar opcionalmente desde una clase padre utilizando la cláusula extends

En efecto la clase heredada es una clase hija (subclase o clase derivada)

Automáticamente se heredan todas las definiciones de variables y funciones de la clase pariente ( o superclase).

Luego la clase hija (o subclase) puede definir adicionalmente nuevas funciones y variables que no corresponderán con la clase padre.

