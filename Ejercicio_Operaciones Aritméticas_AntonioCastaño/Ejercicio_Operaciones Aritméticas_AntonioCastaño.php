<!-- Con html, indico el ejercicio que es. Esto lo repetire en cada ejericio -->
<h1>Ejercicio 1: Cálculo de área y perímetro de un rectángulo</h1>
<hr>
<?php 
/* Escribe un script que calcule el área y el perímetro de un rectángulo dados el ancho y el
alto. */

// Defino las variables base y altura 
$base = 5;
$altura = 10;

//calculamos el area y el perimetro
$area = $base * $altura;
$perimetro = 2*($base+$altura);

//mostramos el resultado por pantalla
echo nl2br(string: "El área del rectángulo es: $area \n");
echo nl2br("El perimetro del rectángulo es: $perimetro \n");
?>

<h1>Ejercicio 2: Calcular el resto y cociente de dos números</h1>
<hr>
<?php 
/* Dado dos números enteros, calcula el cociente y el resto de la división. */

// Defino las variables
$num1 = 10;
$num2 = 3;

// Calculamos el cociente y el resto
$cociente = (int)($num1/$num2);
$resto = $num1%$num2;

// Mostramos el resultado por pantalla
echo nl2br("El cociente de los numeros ".$num1." y ".$num2." es: ".$cociente."\n");
echo nl2br("El resto de los numeros ".$num1." y ".$num2." es: ".$resto);
?>

<h1>Ejercicio 3: Pre-incremento y post-incremento</h1>
<hr>
<?php 
/* Crea un script que muestre la diferencia entre el pre-incremento y el post-incremento. */

// Defino la variable
$num1 = 8;
$num2 = 6;

//Calculo el preincremento y lo muestro por pantalla
echo nl2br("Pre-Incremento(valor inicial= ".$num1."):".++$num1."\n");

//Calculo el postincremento y lo mnuestro por pantalla
echo nl2br("\nPost-Incremento(valor inicial= ".$num2."):".$num2++."\n");
echo "Siguiente vez que se muestre el dato anterior: ".$num2;
?>

<h1>Ejercicio 4: Redondeo de un número</h1>
<hr>
<?php 
/* Utiliza la función round() para redondear un número a 2 decimales. */
//declaro una variable con decimales
$num = 2.5748474;

//muestro por pantalla la variable normal y redondeada
echo nl2br("Numero inicial: ".$num."\n");
echo nl2br("Numero redondeado: ".round($num));
?>

<h1>Ejercicio 5: Calcular potencias</h1>
<hr>
<?php 
/* Escribe un script que calcule y muestre el valor de 3 elevado a la 4ta potencia usando el
operador **. */

//declaramos la variable
$num = 3;

//mostramos por pantalla la 4ta potencia del numero
echo nl2br("4ta potencia de 3: ".$num**4);
?>

<h1>Ejercicio 6: Número aleatorio</h1>
<hr>
<?php 
/* Genera un número aleatorio entre 1 y 50 usando mt_rand(). */

//declaro la variable que almacena el numero aleatorio
$ale = mt_rand(1,50);

//muestro por pantalla el numero aleatorio
echo "El numero aletorio es: ".$ale;
?>

<h1>Ejercicio 7: Conversión de tipos con operadores de
comparación</h1>
<hr>
<?php 
/* Compara un número entero con una cadena de texto usando === y == para mostrar la
diferencia. */

//declaro una variable entera y una cadena
$entero = 4;
$cadena = "4";

//comparo las variables usando == y ===
$iguales2 = $entero==$cadena;
$iguales3 = $entero===$cadena;

//muestro las variables por pantalla
echo nl2br("La variable 1 y la dos son iguales: ".(int)$iguales2."\n");
echo nl2br("La variable 1 y la dos son estrictamente iguales: ".(int)$iguales3);

?>

<h1>Ejercicio 8: Formatear un número con separador de miles y
decimales</h1>
<hr>
<?php 
/* Usa number_format() para mostrar un número con separador de miles y 3 decimales.*/

//declaro la variable
$numero = 1541645165225.165146;

//mostramos por pantalla
echo "Numero formateado: ".number_format($numero,2,",",".");
?>

<h1>Ejercicio 9: Evaluar expresiones con operadores lógicos</h1>
<hr>
<?php 
/* Usa operadores lógicos para determinar si un número está entre 10 y 20. */
$num = 16;

//mostramos por pantalla
echo nl2br("Numero: ".$num."\n");

if($num>10){//vemos si es mayor de 10
    if($num<20){//vemos si es menor de 20
        echo "El numero esta entre 10 y 20";
    }else echo "El numero es mayor de 20";
}else echo "El numero es menor de 10";
?>

<h1>Ejercicio 10: Incremento de caracteres</h1>
<hr>
<?php 
/* Muestra cómo se comporta el incremento en caracteres con el operador ++. */
//creo la cadena
$cadena = "Yo soy a";

//muestro por pantalla la cadena inicial y la incrementada
echo nl2br("Cadena inicial: ".$cadena."\n");
echo "Cadena incrementado: ".++$cadena;
?>