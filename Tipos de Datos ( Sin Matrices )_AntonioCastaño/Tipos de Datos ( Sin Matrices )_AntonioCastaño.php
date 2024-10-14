<!-- Indico el ejercicio en el que no encontramos, acompañado de una linea horizontal para distinguir
los distintos ejercicios. Esto lo hare en cada uno de los ejercicios. -->
<br>
<br>
<h1>Ejercicio 1</h1>
<hr>
<?php
/* 1. Crea un script en PHP que declare y muestre diferentes tipos de datos: enteros, flotantes,
cadenas y booleanos. */
$entero = 10; //Declaramos la variable entera
$fotante = 3.14; //Declaramos la variable flotante
$cadena = "Hola mundo!"; //Declaramos la cadena
$booleano = true; //Declaramos el booleano

//Mostramos los valores de las variables por pantalla
echo "Entero: $entero <br>";
echo "Flotante: $fotante <br>";
echo "Cadena: $cadena <br>";
echo "Booleano: $booleano";
?>

<br>
<br>
<h1>Ejercicio 2</h1>
<hr>
<?php
/* 2. Declara una cadena y realiza operaciones básicas como obtener su longitud,
convertirla a mayúsculas y concatenarla con otra cadena */
$cadena = "Esto es un ejemplo"; //creamos la cadena

echo "Cadena: $cadena <br>"; //Mostramos la cadena original
echo "Longitud de la cadena: " . strlen($cadena) . "<br>"; //Mostramos la longitud de la cadena
echo "Cadena convertida a mayúsculas: " . strtoupper($cadena) . "<br>"; //Mostramos la cadena convertida a mayúsculas
$cadena2 = ", buenas tardes"; //creamos la cadena 2
echo "Cadena concatenada: " . $cadena . "$cadena2"; //Mostramos la cadena1 concatenada con la cadena 2
?>

<br>
<br>
<h1>Ejercicio 3</h1>
<hr>
<?php
/* 3. Crea una cadena en la que incluyas comillas simples y dobles.*/
echo "Cadena con comillas simples: 'Hola, mundo!' <br>"; //Mostramos la cadena con comillas simples
echo "Cadena con comillas dobles: \"Hola, mundo!\" "; //Mostramos la cadena con comillas dobles
?>

<br>
<br>
<h1>Ejercicio 4</h1>
<hr>
<?php
/* 4. Escribe dos cadenas, una con comillas simples y otra con comillas dobles, que
incluyan una variable. Observa la diferencia. */
$variable = 33; //creamos la variable
echo "Cadena con comillas simples: 'La variable es igual a $variable' <br>"; //Mostramos la cadena con comillas simples con la variable anterior
echo "Cadena con comillas dobles: \"La variable es igual a $variable\" "; //Mostramos la cadena con comillas dobles con la variable anterior
?>

<br>
<br>
<h1>Ejercicio 5</h1>
<hr>
<?php
/* 5. Crea una cadena que incluya código HTML y CSS, utilizando comillas
correctamente.*/
echo '<h4 style="background-color:rgb(171, 179, 255)">"Ejercicio 5"</h4>'; //Mostramos un h4 con un color de fondo
?>

<br>
<br>
<h1>Ejercicio 6</h1>
<hr>
<?php
/* 6. Usa caracteres especiales como saltos de línea, tabulaciones o barras invertidas
dentro de una cadena.*/
echo "Esto es un ejemplo\nde cadena con salto de línea.\tTabulación.\\Barra invertida."; //Mostramos la cadena por pantalla
?>

<br>
<br>
<h1>Ejercicio 7</h1>
<hr>
<?php
/* 7. Concatenar dos cadenas y mostrar el resultado. */
$cadena1 = "Hola "; //Declaramos la primera cadena
$cadena2 = "mundo!"; //Declaramos la segunda cadena

echo $cadena1 . $cadena2; //Mostramos la concatenación de las cadenas
?>

<br>
<br>
<h1>Ejercicio 8</h1>
<hr>
<?php
/* 8. Modifica el script anterior para que el texto concatenado se muestre en líneas
separadas */
$cadena1 = "Hola "; //Declaramos la primera cadena
$cadena2 = "mundo!"; //Declaramos la segunda cadena

echo $cadena1 . "<br>" . $cadena2; //Mostramos la concatenación de las cadenas con salto de línea
?>

<br>
<br>
<h1>Ejercicio 9</h1>
<hr>
<?php
/* 9. Declara una variable y asígnale un valor. Luego, imprímela en pantalla. */
$variable = "Variable 1"; //Declaramos la variable
echo $variable; //Mostramos la variable por pantalla
?>

<br>
<br>
<h1>Ejercicio 10</h1>
<hr>
<?php
/* 10. Usa varias variables en un cálculo simple y muestra el resultado */
$numero1 = 5; //Declaramos la primera variable
$numero2 = 10; //Declaramos la segunda variable
$suma = $numero1 + $numero2; //Realizamos la suma

echo "La suma de $numero1 y $numero2 es: $suma"; //Mostramos el resultado por pantalla
?>

<br>
<br>
<h1>Ejercicio 11</h1>
<hr>
<?php
/* 11. Concatenar una variable y una cadena en una sola línea de texto. */
$variable = 5; //Declaramos la variable
$cadena = "La variable 1 es igual a: "; //Declaramos la cadena

echo $cadena . $variable; //Mostramos la concatenación de las cadenas
?>

<br>
<br>
<h1>Ejercicio 12</h1>
<hr>
<?php
/* 12.  Incluye una variable dentro de una cadena usando comillas dobles */
$variable = "Variable 1"; //Declaramos la variable
echo "La variable 1 es igual a: $variable"; //Mostramos la concatenación de las cadenas
?>

<br>
<br>
<h1>Ejercicio 13</h1>
<hr>
<?php
/* 13. Declara variables de diferentes tipos (entero, flotante, booleano) y muéstralas */
$entero = 10; //Declaramos la variable entera
$fotante = 3.14; //Declaramos la variable flotante
$cadena = "Hola mundo!"; //Declaramos la cadena
$booleano = true; //Declaramos el booleano

//Mostramos los valores de las variables por pantalla
echo "Entero: $entero <br>";
echo "Flotante: $fotante <br>";
echo "Cadena: $cadena <br>";
echo "Booleano: $booleano";
?>

<br>
<br>
<h1>Ejercicio 14</h1>
<hr>
<?php
/* 14. Realiza operaciones aritméticas básicas (suma, resta, multiplicación, división). */
$numero1 = 5; //Declaramos la primera variable
$numero2 = 10; //Declaramos la segunda variable
$suma = $numero1 + $numero2; //Realizamos la suma
$resta = $numero1 - $numero2; //Realizamos la resta
$mult = $numero1 * $numero2; //Realizamos la multiplicación
$div = $numero1 / $numero2; //Realizamos la división

//Mostramos los datos por pantalla
echo "Suma: $suma <br>";
echo "Resta: $resta <br>";
echo "Multiplicación: $mult <br>";
echo "División: $div";
?>

<br>
<br>
<h1>Ejercicio 15</h1>
<hr>
<?php
/* 15. Declara variables con nombres significativos y utiliza buenas prácticas para
nombrarlas. */
$numeroEntero = 5; //Declaramos la variable entera
$numeroDecimal = 3.14; //Declaramos la variable decimal
//Mostramos los datos por pantalla
echo "Número entero: $numeroEntero <br>";
echo "Número decimal: $numeroDecimal";
?>

<br>
<br>
<h1>Ejercicio 16</h1>
<hr>
<?php
/*16 Une variables y texto dentro de un echo. */

$variable = "Hola, mundo!"; //Declaramos la variable
echo "La variable 1 es igual a: " . $variable; //Mostramos la concatenación de las cadenas
?>

<br>
<br>
<h1>Ejercicio 17</h1>
<hr>
<?php
/* 17. Declara una variable booleana y usa un if para mostrar un mensaje
dependiendo de su valor */

$coche = true; //Declaramos la variable booleana

if ($coche) { //Si la variable es true
    echo "Es un coche"; //Mostramos el mensaje
} else { //Si la variable es false
    echo "No es un coche"; //Mostramos el mensaje
}
?>

<br>
<br>
<h1>Ejercicio 18</h1>
<hr>
<?php
/* 18. Declara una variable entera y úsala en una operación. */

$numero = 5; //Declaramos la variable
echo "La suma es: " . ($numero + 3); //Mostramos el resultado por pantalla
?>

<br>
<br>
<h1>Ejercicio 19</h1>
<hr>
<?php
/* 19. Realiza una operación binaria y muestra el resultado.*/
$maximo = PHP_INT_MAX; //Declaramos la variable entera máxima
$demasiado = (int)($maximo + 1); //Realizamos la operación
echo "<p>Si se intenta guardar 1 más, el resultado es $demasiado</p>"; //Mostramos el resultado por pantalla
?>

<br>
<br>
<h1>Ejercicio 20</h1>
<hr>
<?php
/* 20. Usa una variable de tipo flotante y realiza una operación con ella. */
$numero = 5.5; //Declaramos la variable flotante
echo "La suma es: " . ($numero + 3.82); //Mostramos el resultado por pantalla
?>

<br>
<br>
<h1>Ejercicio 21</h1>
<hr>
<?php
/* 21. Declara una variable de cadena y manipúlala (mayúsculas, minúsculas). */
$cadena = "Buenas tardes"; // Declaramos la cadena original
$cadenaMA = strtoupper($cadena); //La ponemos en mayusuculas
$cadenaMI = strtolower($cadena); //La ponemos en minusculas
//Mostramos los resultados por pantalla
echo "Mayúsculas: $cadenaMA <br>";
echo "Minúsculas: $cadenaMI";
?>

<br>
<br>
<h1>Ejercicio 22</h1>
<hr>
<?php 
/* 22. Convierte un número en una cadena y una cadena en un número. */
$numero = 123; //Declaramos el número
$cadena = strval($numero); //La convertimos a cadena
$numeroConv = intval($cadena); //La convertimos de cadena a número

//Mostramos los resultados por pantalla
echo "Numero original: $numero <br>";
echo "Cadena: $cadena <br>";
echo "Numero convertido: $numeroConv";
?>

<br>
<br>
<h1>Ejercicio 23</h1>
<hr>
<?php 
/* 23. Convierte explícitamente una variable flotante en entera */

$numero = 5.5; //Declaramos la variable flotante
echo "Número flotante convertido a entero: (int)$numero"; //Mostramos el resultado por pantalla
?>

<br>
<br>
<h1>Ejercicio 24</h1>
<hr>
<?php 
/* 24. Realiza una operación entre diferentes tipos de datos (flotante y entero) y
observa la conversión automática. */
$numeroF = 5.5; //Declaramos la variable flotante
$numeroI = 10; //Declaramos la variable entera
echo "Suma: $numeroF + $numeroI = ". ($numeroF + $numeroI); //Mostramos el resultado por pantalla
?>

<br>
<br>
<h1>Ejercicio 25</h1>
<hr>
<?php 
/* 25. Usa una variable como condicional lógica. */
$numero = 5; //Declaramos la variable

if ($numero > 2) { //Si el número es mayor que 2
    echo "El número es mayor que 2"; //Mostramos el mensaje
} else { //Si el número es menor o igual a 2
    echo "El número menor o igual a 2"; //Mostramos el mensaje
}
?>