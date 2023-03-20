# Control de flujo

## ¿Qué es el control de flujo?
Detengámonos en este concepto un momento:
flujo. Hemos experimentado varios flujos en
nuestra vida: el flujo de agua, el flujo eléctrico,
el flujo de gas, por ejemplo. En todos estos
ejemplos, flujo hace referencia a dinamismo,
movimiento, acción.

Pero.. ¿En qué se relaciona esta idea de flujo
con programación? Así como existe el flujo de
agua o el flujo de gas, también existe, en
programación, el flujo de ejecución de un
programa. El flujo de ejecución en un programa
son las líneas que ejecuta y el orden en que
ejecuta las mismas.=
Volvamos con nuestros ejemplos de la
vida diaria. 

Así como existe el flujo de
agua, de gas o eléctrico; así también
existen herramientas para gestionar dicho
flujo: una canilla en el flujo de agua, una
llave en el flujo de gas, un interruptor en
el flujo eléctrico. Estas tres herramientas
controlan el flujo, definiendo si se debe
abrir paso o no.

La canilla cumple una función de control
de flujo: controla el flujo de agua. ¿La
canilla está abierta? Entonces permite el
paso del agua. La canilla condiciona el
paso del agua.
Asimismo, en programación poseemos
herramientas para controlar el flujo de
ejecución. Estas herramientas se agrupan
en dos grandes categorías:
- Condicionales: ejecutan código una vez
en función de si una condición es
verdadera o falsa.
- Bucles: repiten código varias veces en
función de si una condición es
verdadera o falsa

---

# Condicionales

## ¿Qué es un condicional?
Una sentencia condicional, como se mencionó
anteriormente, ejecuta un fragmento de código
en función de si una expresión es cierta o no.
En PHP -como en muchos otros lenguajestenemos diferentes estructuras que nos
permiten implementar una sentencia
condicional. Vamos a ir analizando una a una
ofreciendo una breve descripción, un diagrama
que muestre su lógica y su implementación en
PHP ¡Vamos a ello!

## Estructura IF
La estructura if evalúa el valor de
verdad de una expresión y ejecuta
el código entre llaves si dicha
expresión es VERDADERA.
La sintaxis -forma de escritura- del if
es muy sencilla: después de la
palabra reservada ‘if’ en minúscula,
sigue la condición a evaluar entre
paréntesis. Dentro de estos paréntesis
se acepta cualquier sentencia que
resulte en un valor de verdad (puedes
consultar la sección OPERADORES para
ver una descripción de los operadores
lógicos más comunes). Luego, el código
a ser ejecutado en caso de ser cierta la
condición, se escribe entre llaves. Si
dicho código consta de una sola línea,
las llaves se pueden omitir.

## Estructura IF ELSE
La sentencia if-else permite
implementar un código en caso de
que la condición del if sea falsa.
En este caso, el código que se
ejecutará si la condición evaluada
sea falsa se encuentra dentro de
las llaves del else. La palabra
reservada ‘else’ indica un
código alternativo a
ejecutar, un código que se
ejecutará en caso de que la
condición evaluada en el if
anterior sea falsa.

## Estructura IF ELSE IF

La expresión ‘else if’ me permite
indicar caminos alternativos al
camino principal marcado por el if.
En otras palabras, cuando la
condición evaluada por la sentencia
IF resulta ser falsa, el intérprete
pasará a evaluar las condiciones
alternativas marcadas por las
sentencias ELSE IF.

En el código de ejemplo, definimos
un caso alternativo: que numero1
sea menor a numero2. Para dicho
caso hemos definido un conjunto de
código. Como podemos ver,
podemos combinar if, else y else if
para armar estructuras en las que
podamos evaluar un caso inicial,
evaluar casos alternativos y
definir un código en caso de que
todos los previos hayan sido
falsos. No son estructuras
disyuntivas (‘o esta o aquella’)
sino que se pueden combinar y
recombinar de muchas formas.

## Estructura SWITCH
La estructura switch es una estructura
condicional especial que permite evaluar el
valor de una variable y ejecutar código en
base al valor de dicha variable. Esta
estructura tiene un código muy distinto que
las anteriores.
Primero, la palabra reservada cambia por
switch. Esta estructura evaluará el valor de la
variable que tenga dentro de sus paréntesis y
ejecutará el código dependiendo de su valor,
del ‘caso’. Al acceder a un caso, necesitamos
indicarle cuando terminó dicho caso y
empieza el otro. Para eso sirve el ‘break;’ en
este código. Al caso ‘default’ se accede
únicamente cuando no se accedió a ningún
otro caso previo - es el equivalente al else
---

# Bucles

## ¿Qué es un bucle?
Un bucle, como se mencionó anteriormente, es una
estructura de control que ejecuta un código varias
veces dependiendo del valor de verdad de una
expresión. En palabras más simples: el bucle permite
repetir código.
Podemos clasificar los bucles en dos tipos en función
de cómo determinan si deben o no continuar
repitiendo el código.
- Bucles cualitativos: repiten el código mientras que el
valor de verdad de una sentencia sea verdadero. No
tiene control sobre la cantidad de repeticiones.
- Bucles cuantitativos: repiten el código en función de
una condición numérica. Tienen el control sobre la
cantidad de repeticiones.

# While
El bucle while repite un bloque de
código mientras (while en inglés)
que una sentencia sea cierta.
Este bucle evalúa primero y luego
ejecuta el código.
Se escribe prácticamente igual que
el if, y su lógica es muy parecida. La
única diferencia con la estructura if
es que, mientras que dicha
estructura ejecuta el código una
vez al ser verdadera su expresión,
el while repite el código mientras
sea verdadera su expresión.

# Do while
El bucle Do-While repite un bloque
de código mientras una expresión
sea cierta, con la salvedad de que
ejecuta primero el código y luego
evalúa la expresión.
En este caso, por más de que la
condición sea falsa, el bucle
do-while primero ejecuta el código
y luego evalúa. Gracias a esto,
este bucle realiza la primera
repetición incondicionalmente.
Podemos utilizarlo cuando
necesitemos, por lo menos, una
repetición del código.

# For
El bucle for es un bucle
cuantitativo, esto significa que la
decisión de continuar repitiendo el
código o no depende de un valor
numérico. El bucle for analiza esa
decisión en base a una variable
creada en la cabecera del bucle.
Antes de empezar a repetir, el
bucle asigna un valor inicial a esa
variable. Durante las repeticiones
se va ejecutando un cambio
numérico en esa variable (puede
ser que vaya sumando uno o que
vaya restando). El bucle evalúa
determinada condición al final de
cada repetición y decide si
continuar repitiendo o no.

La sintaxis del bucle for es la siguiente:
for(inicio; condición; cambio) {
 //código a repetir
}
En la cabecera:
- Primero se declara el valor de inicio de la variable
que controla las repeticiones (iterador).
- Luego se declara la condición que, en caso de ser
cierta, ocasiona que el bucle vuelva a repetir.
- Finalmente se declara una expresión que se
ejecutará al final de cada repetición.
En el cuerpo
- Disponemos de la variable iterador como una
variable normal dentro de las llaves del bucle
---

# Funciones

## ¿Qué es una función?
Una función o módulo, en programación, es
un proceso reutilizable que es capaz de recibir
datos de entrada y emitir datos de salida.
1. Entradas
2. Operaciones
3. Salidas
Podemos pensar en los módulos como la
implementación en programación del
concepto matemático de función. Entender el
concepto matemático nos será de gran ayuda
para entender las funciones en programación.
En matemáticas, una función establece una
relación de dependencia entre dos valores: un
valor depende de otro.
Por ejemplo: en la función y = x + 2 se puede
introducir cualquier valor en lugar de la
variable ‘x’ y, al resolver los cálculos, obtener
un determinado resultado en la variable ‘y’.
Podemos elegir el valor de X pero no el
valor de Y, ya que este último depende
-está en función de- la variable X.

Y usted se preguntará ¿de qué me sirve
saber esto? Bien. Yo le respondo: mucho.
De hecho, entendiendo esta sencilla idea
usted cuenta con un mapa sobre las
funciones.
Me explico:

- En una función matemática las salidas
están en función de las entradas. En un
módulo también.
-  En una función matemática podemos
evaluar la función en varias entradas y
así obtener diferentes salidas utilizando
las mismas operaciones. En un módulo
también.
Repito: los módulos en programación
son una implementación del concepto
de función en matemáticas. Siguen, en
esencia, la misma base.

## ¿Para qué sirve una función?
Básicamente un módulo es un proceso
reutilizable. Entonces, un módulo me permite
reutilizar procesos. Sencillamente, sirven para
eso: reutilizar procesos.
Supongamos que usted desarrolla un programa
para sumar dos números: 10 y 20.
Luego de probarlo, toma conciencia de que
dicha operación (la suma) se puede aplicar a
otros números que no sean los descritos
anteriormente; y decide hacer las adaptaciones
necesarias. Ahí usted hizo su código reutilizable,
ampliable, aplicable a otro conjunto de datos.
Finalmente, usted puede desarrollar un código
que no solo sume, sino que realice cualquier
otra operación personalizada.
En ese momento, usted hizo un código
mucho más ampliable y reutilizable; es
decir, amplió el conjunto de datos para el
cual el código es válido.

## ¿Cómo se implementa
una función en PHP?
Podemos realizar dos operaciones con una
función: crearla (declarar) y usarla (llamar).
Declarar una función
Analicemos detalladamente la siguiente estructura:
1. Es necesario anteponer la palabra reservada ‘function’ a
cada declaración de función. Gracias a esta palabra, el
intérprete de PHP procesa las líneas que siguen como la
declaración de una función.
2. Luego de un espacio se escribe el nombre de la función,
que nos servirá para llamarla luego. NOTA: no todas las
funciones deben contar con nombre: PHP soporta las
funciones anónimas. Más información aquí:
https://www.php.net/manual/es/functions.anonymous.php

3. Seguido y entre paréntesis se encuentran las
distintas entradas. Entre esos paréntesis se
escriben los nombres de los parámetros que
acepta mi función, en forma de variables y
separados por coma. ( por ejemplo, si mi
función recibe dos números, un posible juego de
parámetros sería: ‘($num1, $num2)’). Dichos
parámetros actúan como una variable normal
durante toda la ejecución de la función.
Al llamar a la función, se puede dar valor a
dichos parámetros, y así aplicar las mismas
operaciones para un conjunto de datos distinto.
4. En cuarto lugar, nos encontramos con las
operaciones. Entre las llaves de apertura y de
cierre, nos encontramos con las distintas
operaciones. Aquí puede escribir usted
cualquier sentencia del lenguaje. Además
recuerde que cuenta con los parámetros, que
podrán cambiar de llamada en llamada y usted
puede utilizar en esta parte de la función.
5. Finalmente, siguiendo a la palabra reservada
‘return’ encontramos la salida de la función, el
valor devuelto al resto del programa. Dicho valor
será el resultado de llamar a la función, la salida
de todo el proceso; y podrá utilizarse en otras
partes del programa.
### Resumiendo
1. Empiece por escribir la palabra reservada function.
2. Escriba el nombre de la función, si es necesario
3. Escriba los nombres de los parámetros, que
actuarán como variables en el paso siguiente.
4. Escriba el código de la función, las operaciones
que debe realizar. Recuerde que cuenta con los
parámetros como variables.
5. De ser necesario, defina la salida de la función
mediante la palabra reservada return.

## Llamar a la función
Analicemos detalladamente la llamada de
una función:
1. Llamar a una función es asignar un valor a sus
parámetros con el fin de ejecutar sus operaciones
y, de ser necesario, obtener su salida.
2. Únicamente las funciones que tienen un
nombre pueden ser llamadas.
3. Para llamar a una función basta con escribir su
nombre y, entre paréntesis los valores pasados
a cada parámetro.
4. Es importante destacar que dichos valores se
asignan según su posición. Es decir, que, al
primer parámetro previamente escrito en la
declaración, se le asignará el primer valor escrito
en la llamada. Al segundo parámetro, el
segundo valor; y así sucesivamente.
5. El valor de retorno es el valor devuelto por la
llamada. En otras palabras: la llamada de una
función es igual a su valor de retorno. De esta
forma, puede almacenarse dicho valor o
utilizarse como cualquier otro tipo de dato
normal.
## Resumiendo
1. Llamar a una función es asignar valor a sus
parámetros para ejecutar sus operaciones y
obtener su salida.
2. Para llamar a una función necesitamos conocer
su nombre y parámetros, pero no sus
operaciones.
3. Se llama a una función escribiendo su nombre y,
seguido, entre paréntesis, el valor de cada
parámetro, en el orden en el que éstos últimos
fueron declarados.
4. La llamada de la función es igual al valor de
retorno de la misma, pudiendo usar ese dato
como cualquier otro (p. ej. mostrarlo, sumarlo,
operarlo, entre otros)