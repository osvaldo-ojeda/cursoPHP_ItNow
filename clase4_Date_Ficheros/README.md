# Funciones de cadena de PHP

En este capítulo veremos algunas funciones de uso común para manipular cadenas.

## strlen() - Devuelve la longitud de una cadena

La función PHP strlen()devuelve la longitud de una cadena.

### Ejemplo

Devuelve la longitud de la cadena "¡Hola mundo!":

    <?php
         echo strlen("Hello world!"); // outputs 12
    ?>

## str_word_count() - Contar palabras en una cadena

La str_word_count()función PHP cuenta el número de palabras en una cadena.

### Ejemplo

Cuente el número de palabras en la cadena "¡Hola mundo!":

    <?php
    echo str_word_count("Hello world!"); // outputs 2
    ?>

## strrev() - Invertir una cadena

La función PHP strrev()invierte una cadena.

### Ejemplo

Invierta la cadena "¡Hola mundo!":

   <?php
   echo strrev("Hello world!"); // outputs !dlrow olleH
   ?>

## strpos() - Buscar un texto dentro de una cadena

La strpos()función de PHP busca un texto específico dentro de una cadena. Si se encuentra una coincidencia, la función devuelve la posición del carácter de la primera coincidencia. Si no se encuentra ninguna coincidencia, devolverá FALSO.

### Ejemplo

Busque el texto "mundo" en la cadena "¡Hola, mundo!":

     <?php
     echo strpos("Hello world!", "world"); // outputs 6
     ?>

## str_replace() - Reemplazar texto dentro de una cadena

La función PHP str_replace()reemplaza algunos caracteres con otros caracteres en una cadena.

## Ejemplo

Reemplace el texto "mundo" con "Dolly":

    <?php
    echo str_replace("world", "Dolly", "Hello world!"); //     outputs Hello Dolly!
    ?>

---

# Fecha y hora PHP

La date()función PHP se utiliza para formatear una fecha y/o una hora.

## La función date() de PHP

La función PHP date()formatea una marca de tiempo a una fecha y hora más legible.

### Sintaxis

date(format,timestamp)

Parameter---------------------Description

format-------------Required. Specifies the format of the timestamp
timestamp ---------Optional. Specifies a timestamp. Default is the current date and time

Una marca de tiempo es una secuencia de caracteres que indica la fecha y/o la hora en que ocurrió un determinado evento.

## obtener una cita

El parámetro de formato requerido de la función date() especifica cómo formatear la fecha (o la hora).

Aquí hay algunos caracteres que se usan comúnmente para las fechas:

- d - Representa el día del mes (01 a 31)
- m - Representa un mes (01 a 12)
- Y - Representa un año (en cuatro dígitos)
- l ('L' minúscula) - Representa el día de la semana
  También se pueden insertar otros caracteres, como "/", "." o "-" entre los caracteres para agregar formato adicional.

El siguiente ejemplo da formato a la fecha de hoy de tres maneras diferentes:

    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?>

## Sugerencia de PHP: año de copyright automático

Use la date()función para actualizar automáticamente el año de copyright en su sitio web:

EjemploObtenga su propio servidor PHP
&copy; 2010-<?php echo date("Y");?>

## obtener un tiempo

Aquí hay algunos caracteres que se usan comúnmente para veces:

-H - formato de 24 horas de una hora (00 a 23)

-h - formato de 12 horas de una hora con ceros a la izquierda (01 a 12)

-i - Minutos con ceros a la izquierda (00 a 59)

-s - Segundos con ceros a la izquierda (00 a 59)

-a - Antemeridiem y Postmeridiem minúsculas (am o pm)

El siguiente ejemplo muestra la hora actual en el formato especificado:

Ejemplo

       <?php
       echo "The time is " . date("h:i:sa");
       ?>

¡Tenga en cuenta que la función PHP date() devolverá la fecha/hora actual del servidor!

## Obtenga su zona horaria

Si la hora que recibió del código no es correcta, probablemente se deba a que su servidor está en otro país o está configurado para una zona horaria diferente.

Por lo tanto, si necesita que la hora sea correcta según una ubicación específica, puede configurar la zona horaria que desea usar.

El siguiente ejemplo establece la zona horaria en "América/Nueva_York" y luego muestra la hora actual en el formato especificado:

Ejemplo

     <?php
     date_default_timezone_set("America/New_York");
     echo "The time is " . date("h:i:sa");
     ?>

---

# Manejo de archivos

## Introducción

Las variables y las constantes nos permiten
almacenar datos de forma muy útil. Sin
embargo, la información almacenada en
ellas, se pierde al terminar de ejecutarse el
programa y enviarse la respuesta al
servidor. Son, por así decirlo, temporales.
Ahora bien, pensemos en el caso de un
sistema de registro de usuarios. En este
caso necesitamos datos temporales, como
lo que se ha introducido en el campo de
inicio de sesión; pero también necesitamos
datos que perduren más allá de la ejecución
de este programa. De lo contrario se
debería registrar en el sitio cada vez que lo
quiera usar.
Para lograr esto, PHP soporta:

- Gestión del sistema de archivos
- Conexión y consulta con una base de
  datos.
  En esta clase nos vamos a enfocar en la
  primera opción: gestionar el sistema de
  archivos.
  El sistema de archivos es el conjunto
  organizado de archivos y carpetas. Con
  PHP tenemos acceso al sistema de archivos
  de la máquina servidor, por lo que podemos
  operar con archivos y directorios en la
  máquina servidor.

## Operaciones con archivos

Para manejar archivos en PHP conviene primero tener en cuenta que PHP provee dos conjuntos
de funciones para manejar los archivos.

- Un conjunto para manejar los archivos a
  través de un manejador de archivos
  (handler). Estas funciones se caracterizan
  por empezar con la letra ‘f’, y permiten
  hacer operaciones de lectura y escritura
  binaria de archivos. Son usadas para
  acceder a porciones del contenido,
  crearlo, vaciarlo.
- Otro conjunto para manejar el sistema
  de archivos a través de rutas. Estas otras
  funciones permiten acceder al sistema
  de archivos mediante la ruta del
  archivo en vez de un manejador. No
  tienen un único prefijo, pero muchas
  empiezan con ‘file’; y se utilizan para
  acceder rapidamente a los archivos y
  comprobar información relativa a los
  mismos (como tamaño).

### Veamos ahora las cuatro operaciones básicas a través de un manejador de archivos.



- Abrir el archivo
  - $manejador = fopen(‘ruta’, ‘modo’);
     - La función fopen es la primera función. Esta función recibe la ruta y el modo, y retorna un manejador del archivo (no el archivo mismo). Este manejador estará habilitado para realizar las operaciones que le describa en el parámetro ‘modo’ *

- Leer el archivo
  - fread($manejador, long)
    o
    fread($manejador, filesize(‘ruta’))
    - Lee el contenido de un archivo basado en su tamaño.
La lectura se realiza desde el byte 0 hasta la cantidad
de bytes indicada en el segundo parámetro. Si se
quiere leer todo el archivo (lo más recomendable), se
puede obtener su tamaño total con la función filesize()


- Escribir en el archivo 
  - fwrite($manejador, ‘texto’)
    - Escribe un texto(2do parámetro) al final del archivo
    Cerrar el archivo fclose($manejador) Cierra el archivo y destruye el manejador del archivo.
    Es una forma muy útil de liberar recursos de la
    memoria al terminar mis operaciones.

## Apéndice A:
Listado de los posibles
valores del parámetro ‘modo’
en fopen()
Modo y  Descripción
- r
  - Abre el archivo en modo de lectura, empezando por la parte inicial del archivo.
O sea, que el puntero del archivo se posiciona por defecto en el inicio del mismo

- r+ 
  - Abre el archivo en modo de lectura y escritura empezando por la parte inicial del
archivo. El puntero es posicionado al inicio del archivo
- w
  - Abre el archivo en modo de escritura, empezando por la parte inicial. Si el
archivo ya existe, elimina su contenido (o sea lo vuelve a crear). Si no existe
intenta crearlo
- w+ 
  - Abre el archivo en modo de lectura y escritura, empezando por la parte inicial. Si
el archivo ya existe, elimina su contenido ( lo vuelve a crear). Si no existe intenta
crearlo
- a
  - Abre el archivo en modo adjunción (pero sólo escritura). Abre el archivo para
adjuntar información empezando a escribir por la parte final. Si no existe intenta
crearlo
- a+
  - Abre el archivo en modo adjunción (pero soporta lectura y escritura). Abre el
archivo para adjuntar información empezando a escribir por la parte final. Si no
existe, intenta crearlo
- x 
 - Crea y abre el archivo en modo escritura.Si el archivo existe la funcion fopen()
fallará y será generado un error de nivel E_WARNING
- x+
 - Crea y abre el archivo en modo escritura.Si el archivo existe, la función fopen()
fallará y será generado un error de nivel E_WARNING