# cursoPhp
## ¿Qué es y para qué sirvela programación web?
La programación web es, como su nombre, la
aplicación de conceptos, técnicas y herramientas
del desarrollo de software al ámbito de internet.
Mediante esta disciplina podremos crear
soluciones a problemas relacionados con la
información en internet: desde comercializar un
producto, pasando por publicar el contenido de
un autor hasta crear completos sistemas de
comunicación, como son las redes sociales o
foros, e incluso trasladar al ámbito de internet
dominios propios de las aplicaciones de
escritorio (como son los sistemas ERP online)

## ¿Cómo programar para la web?
A diferencia de la programación tradicional de
escritorio, programar para la web requiere un
amplio conjunto de tecnologías, muy distintas en
muchos aspectos (desde herramientas de diseño
gráfico hasta una amplia oferta de Sistemas
Gestores de Bases de Datos).
Sin embargo, todas estas herramientas deben
compartir una característica común:

## HTTP: Las reglas del juego
**Programar para la web es programar para el
protocolo HTTP**. Si empezamos con esta idea
en mente, evitaremos muchas confusiones que
podrían surgir luego debido a la complejidad de
nuestra materia. Programar para la web es
programar para que nuestro código sea
procesado en un determinado ambiente, bajo
unas determinadas “reglas de juego”: HTTP.

**¿Qué es HTTP?** HTTP es la sigla para HyperText
Transfer Protocol -Protocolo de transferencia de
hipertexto-. Es el protocolo que permite las
transferencias de información a través de la
Red Global (Internet ó World Wide Web - WWW)


## Modelo Cliente-Servidor
Supongamos que quiere hacer un pedido de una pizza a
un restaurante. Usted se ubica en el rol de cliente.
Supongamos que agarra su teléfono, llama al restaurante
y pregunta por el precio de determinada promoción del
día. En ese momento usted le está haciendo una petición a
quién esté del otro lado del teléfono (pidiéndole el precio
de la promoción del día). Dicha persona que está al otro
lado, procesa su petición y le envía la respuesta con el
precio de la promoción que usted solicitó. Esta misma
persona que procesó su petición y le envió la respuesta
correspondiente cumple un rol de servidor, ya que le sirve
a usted, cliente, de información.

Usted se preguntará: ¿Qué tiene que ver este
ejemplo del restaurante con la programación
web? Pues, yo le respondo: mucho. Así es
cómo opera el protocolo HTTP, bajo el
modelo cliente-servidor.
El modelo cliente-servidor define dos
roles en la comunicación entre dos
dispositivos: un rol cliente que envía
peticiones y recibe respuestas; y un rol
servidor con las tareas complementarias:
recibir peticiones y enviar respuestas.
Sin entrar en muchos detalles técnicos en
esta primera aproximación, este modelo
Cliente-Servidor tiene una utilidad muy
grande para usted a la hora de enfrentarse
a un proyecto web: es un mapa de la
programación web. 

El modelo cliente-servidor será su mapa;
que le ayudará a ver de forma global dónde
está usted programando, qué información
tiene que trabajar y cuál tiene que enviar.
Sin el modelo cliente-servidor en mente
usted se parecerá a un turista sin mapa de
la ciudad ni referencia alguna: irá a los
golpes tratando de ver dónde se encuentra
y qué hacer ahí. ¿Dónde estoy
programando? ¿Qué información recibo?
¿Qué información necesito trabajar? ¿Qué
información necesito enviar? Todas esas
respuestas se pueden obtener fácilmente
con el modelo Cliente-Servidor en mente.

## ¿Dónde estoy programando?

Dentro de este modelo Cliente-Servidor, al
programar en PHP, usted estará programando
desde el lado del servidor. Ésto significa que
toda su tarea consistirá en:
1. Recibir peticiones,
2. procesar dichas peticiones y
3. emitir una respuesta.

Además de este flujo de trabajo, programar
del lado del servidor tiene una característica
muy puntual. Cuando se desarrolla código del
lado del cliente, es decir para ser procesado
por un cliente HTTP (el navegador web es un
cliente HTTP), se cuenta únicamente con los
recursos que dicho cliente ofrece (en este
caso, el navegador web). Es por esa razón
que, por ejemplo, no podemos crear
archivos con JavaScript, con CSS o con HTML.

Reitero: al programar del lado del cliente (es
decir, código para ser procesado por un
cliente HTTP como un navegador web, por
ejemplo) contamos con los recursos
limitados de ese cliente. Sin embargo, al
programar del lado del servidor, esta
situación se revierte notoriamente. 

Al programar del lado del servidor
contamos con todos los recursos que nos
puede ofrecer el Sistema Operativo en el
cual se ejecuta nuestro código. Podemos
acceder al Sistema de Archivos para crear y
leer archivos; podemos crear variables
temporales en el servidor llamadas
“Variables de Sesión”; podemos hacer
solicitudes HTTP a otros sistemas o a bases
de datos. En vez de contar con los recursos
de un solo programa (el navegador)
contamos con los recursos de todo un
Sistema Operativo.

Es importante tener esta idea en mente ya
que, al programar en PHP, estaremos
utilizando todos los recursos que tenemos
disponibles en un procesamiento del lado
del servidor. Esta consideración puede ser
muy útil para evaluar si realmente
conviene incorporar procesamiento del
lado del servidor a un proyecto web:
¿Acaso no alcanza con los recursos que
me ofrece el navegador mediante HTML,
CSS y JavaScript? ¿Necesito utilizar el
sistema de archivos para crear, leer y/o
escribir archivos binarios o de texto?
¿Necesito comunicarme con otros
sistemas a través de HTTP (por ejemplo,
conectarme con bases de datos)? Todas
estas preguntas pueden ser relevantes a
la hora de definir si es conveniente o no
incorporar el procesamiento del lado del
servidor a nuestro proyecto.

--- 

# Programando en PHP

## ¿Qué es PHP?
Según la documentación oficial: ”PHP, acrónimo
de ‘PHP: Hypertext Preprocessor’, es un lenguaje de
'scripting' de propósito general y de código abierto
que está especialmente pensado para el desarrollo
web y que puede ser embebido en páginas HTML. Su
sintaxis recurre a C, Java y Perl, siendo así sencillo
de aprender. El objetivo principal de este lenguaje es
permitir a los desarrolladores web escribir dinámica
y rápidamente páginas web generadas; aunque se
puede hacer mucho más con PHP.”
(https://www.php.net/manual/es/preface.php)


Analicemos algunas partes de este texto:
- Es un lenguaje de ‘scripting’. Existen muchas
formas de categorizar a los distintos
lenguajes de programación: una de ellas es
según la forma en la que se ejecuta el
código. Por un lado tenemos a lenguajes
como C o Java, que primero crean un archivo
ejecutable y luego ejecutan dicho archivo.
Estos lenguajes que se compilan a código
máquina se denominan compilados. En
cambio, las líneas de código de lenguajes
como JavaScript van siendo interpretadas y
ejecutadas a medida que se van leyendo. En
vez de leer todas las líneas y producir un
nuevo archivo, estos lenguajes van leyendo y
ejecutando las líneas de código a la vez; y se
denominan interpretados. PHP pertenece a
esta última categoría.
- De propósito general. No es un lenguaje
destinado para un único propósito, sino
que nos permite desarrollar una variedad
de aplicaciones en el entorno web.
- Está especialmente pensado para el
desarrollo web y puede ser embebido en
páginas HTML. Es un lenguaje para la web
y con una gran adaptabilidad. Con este
lenguaje seremos capaces de construir
aplicaciones web completas.

## ¿Para qué sirve?
Como vimos, PHP es de propósito general.
Sin embargo, presentamos esta lista de
posibles aplicaciones de PHP a modo de
ejemplo. Con este lenguaje podremos
desarrollar:
- Tiendas online.
- Blogs.
- Redes sociales.
- Foros.
- APIs REST.
- Aplicaciones que consuman datos de
otras aplicaciones.
- Sistemas de autentificación.
- Aplicaciones web seguras.

## ¿Cómo se usa?
¡Vamos a empezar a programar un ejemplo
sencillo!
Previamente comentamos que PHP es un
lenguaje interpretado. Por lo tanto, para
empezar necesitamos contar primero con el
intérprete. Hay dos formas en que podemos
obtener el intérprete de PHP:
- Mediante un servidor web en internet,
contratando un hosting que incluya PHP.
- Instalando un servidor web local que nos
permita ejecutar el código en nuestra
máquina de forma local.
Para este curso vamos a optar por la
segunda opción, ya que es más sencillo
hacer pruebas. Sin embargo, vamos a ir
comentando cómo elegir un buen proveedor
de hosting para que puedas publicar tus
proyectos en la red.
Tienes a tu disposición un video donde se
explica cómo instalar el servidor web XAMPP,
que es el que vamos a estar utilizando. Te
animamos a verlo y consultes con tu docente
cualquier inconveniente que puedas tener
en la instalación e inicialización de tu
servidor web local.

## Mi primer programa en PHP
Vamos a hacer un programa que muestre
“Hola mundo” por el navegador.
- PHP es un lenguaje flexible que puede
intercalarse con HTML. Al igual que otros
lenguajes como JavaScript o CSS, posee una
“etiqueta” de apertura (<?php) y otra de cierre
(?>). Podemos escribir archivos que sean una
mezcla entre HTML y PHP o archivos PHP puros.
Dentro de estas dos líneas escribiremos todo
nuestro código PHP.
- La sentencia “echo” permite imprimir contenido
en la pantalla (puede ser texto, números, u otro
tipo de información).
- El texto en PHP se escribe entre comillas. De esta
forma el intérprete lo procesa como texto literal y
no como código PHP a ejecutar.
- Es importante el punto y coma (;) al final de cada
línea. En PHP, este carácter indica el final de una
acción a realizar por el intérprete y el comienzo de la
siguiente. Por tal motivo es estrictamente necesario
ponerlo al final de cada acción que debe ejecutar el
intérprete (en este caso mostrar un mensaje)
---

# Variables

## ¿Qué es una variable y para qué sirve?
Una variable no es ni más ni menos que un espacio
reservado de memoria en el cual yo puedo guardar
información para su posterior uso. En palabras más
simples: una variable es un depósito de datos que
tiene un nombre específico y en el que yo puedo
guardar información para utilizarla luego.

## ¿Cómo se usan las variables?
Las variables se utilizan anteponiendo el signo
pesos/dólar ($) al nombre de dicha variable.


- En el ejemplo anterior obtenemos el mismo
resultado que en el ejemplo anterior pero
con un proceso distinto.
- Primero almacenamos el texto “Hola mundo”
en un espacio de memoria al cual llamamos
‘mensaje’. Mediante ese nombre podremos
acceder al dato que contiene durante toda la
ejecución del programa. (Luego aprenderemos
herramientas para guardar información más
allá de la ejecución del programa que se esté
ejecutando ahora).
- Al guardarse “Hola mundo” en una variable
llamada “mensaje” puedo acceder al dato a
través de la variable. En vez de mostrar
directamente el texto, mostramos la variable,
que contiene el texto.
- PHP permite que una variable puede
contener varios tipos de información,
por lo que no se especifica ninguna
restricción o tipo de dato para cada
variable. Simplemente se nombran
con el signo pesos/dólar ($) y se les
asigna el valor deseado


## Tipos de dato y PHP
En cualquier lenguaje de programación
podemos representar cualquier dato a través
de utilizar o combinar tipos de información
primitivos. Por ejemplo: podemos representar
un nombre a través de un texto; y podemos
representar los datos de una persona
utilizando textos (nombre y apellido), números
(edad, estatura, peso) y valores lógicos (es
mayor de edad). Toda la información se puede
representar a través de los tipos de dato
primitivos que el lenguaje nos ofrece.
PHP soporta diez tipos de dato primitivos,
que presentamos a continuación. Esta
descripción es a modo de presentación y
no pretende ser exhaustiva. Lo importante
en esta primera aproximación es tener una
perspectiva genérica de como PHP divide la
información:

- Boolean. Un boolean expresa un valor que
indica verdad. Puede ser verdadero o falso.
- Integer. Un integer expresa un valor
numérico entero positivo, negativo o cero.
- Float. Un float expresa un valor numérico
decimal.
- String. Un string expresa una cadena de
caracteres, esto es, un texto.
- Array. Un array expresa un valor que
contiene varios valores dentro.
- Object. Un object expresa un Objeto de
una Clase. PHP soporta la Programación
Orientada a Objetos de forma nativa.
- Callable. Un callable expresa un valor
que puede ser ejecutado por el
programa, como una función.
- Iterable. Un iterable expresa un valor
que puede ser recorrido en un bucle.
- Resource. Un resource expresa una
referencia a un recurso externo al
programa.
- NULL. Un NULL expresa un valor vacío
o el valor de una variable que no posee
ningún valor.

De esta forma, sin entrar en detalles de implementación,
podemos saber que con PHP podemos crear valores que
pueden ser verdaderos o falsos como si es mayor de
edad o no (Boolean), almacenar edades (Integer) o
incluso almacenar las acciones que me permite obtener
la edad (Callable). Además, puedo almacenar un conjunto
de edades (Array) que puedan ser recorridas por un bucle
(Iterable). Puedo también tener un archivo externo que
contenga todas las edades (Resource) o especificar la
edad y los meses en formato decimal (Float).

## Crear, leer y escribir una variable
Con una variable podemos realizar tres acciones principales:
- Declarar. Consiste en crear la variable. Al
escribir por primera vez el nombre se crea la
variable. Si no le asigno ningún valor se dice
que la estoy declarando. Reservo el espacio,
pero no lo uso todavía.
- Leer. Consiste en obtener el valor actual de la
variable, y se realiza a través del nombre de la
misma. Al leer la variable obtenemos el último
valor almacenado.
- Escribir. Consiste en cambiar el valor
actual de la variable y se hace a través
del operador igual (=). Si queremos
crear una variable y definir que empiece
con un determinado valor, podemos
unir la Declaración y la Escritura en una
sola línea, tal como está escrito en el
ejemplo anterior
---

# Operadores

## Introducción
Los operadores son símbolos que nos permiten
realizar acciones (operaciones) con datos. Por
ejemplo, si yo quiero sumar el número 2 y el
número 3 utilizo el signo +.
Las operaciones las podemos clasificar en base al
valor que retornan. Por ejemplo: una operación
se define como aritmética al retornar un número,
o lógica al retornar un valor de verdad.
Te invitamos a investigar la documentación de PHP:

## Operaciones aritméticas
Las operaciones aritméticas son
todas aquellas que retornan un
valor numérico (Integer o Float), y
tienen exactamente las mismas
propiedades que una operación
aritmética matemática.
Hay otros operadores aritméticos
como módulo o exponenciación,
que pueden ser muy útiles.
Les remitimos siempre a la
documentación oficial de PHP
sobre la que se basa este manual:
https://www.php.net/manual/es/lang
uage.operators.arithmetic.php

## Operaciones de texto
Los operadores de texto se caracterizan
por devolver un String como resultado
de su operación. Dentro de los
operadores de texto vamos a ver el
operador de concatenación.
Concatenar significa unir un texto con
otro dato (puede ser texto u otro tipo
de dato). Este operador utiliza el punto
(.) como símbolo:
En este código seguimos obteniendo el
mismo resultado (el texto “Hola mundo”
en pantalla), pero lo obtuvimos a través
de unir dos textos mediante el
operador de concatenación.

## Operaciones lógicas
Los operadores lógicos efectúan
comparaciones y retornan un
valor de verdad (verdadero/falso)
basado en dichas comparaciones.

Cabe señalar algunos otros operadores que no se
encuentran en la lista anterior:
- ¿Es igual? Se utiliza como símbolo dos iguales (==) y
comprueba si dos valores son iguales. (p. ej. “1” == 1 es
VERDADERO, ya que solo se comprueba el valor)
- ¿Es idéntico? Se utiliza como símbolo tres iguales (===) y
comprueba si dos valores y sus respectivos tipos de dato
son iguales. (p. ej. “1” === 1 es FALSO ya que se comprueba
que su valor y su tipo de dato sean el mismo)
- ¿Es distinto? Se utiliza una combinación entre el igual y la
negación (!=). Por ejemplo: “A” != 1 es VERDADERO

