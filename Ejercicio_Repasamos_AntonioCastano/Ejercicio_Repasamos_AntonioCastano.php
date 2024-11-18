<!-- Pongo por pantalla el titulo de la actividad. Esto lo hare en todos los ejercicios -->
<h1>Ejercicio 2</h1>
<hr>
<?php
/* Hacer un código con bucles anidados de variables independientes, donde la variable del bucle
exterior ($i) tome valores numéricos entre 1 y 3, y la del bucle interior ($j) valores entre a y d.*/

for ($i = 1; $i < 4; $i++) {
    echo nl2br("Sentencia de la variable " . $i . " incluyendo el valor\n");
    for ($j = "a"; $j < "d"; $j++) {
        echo nl2br("⨽Sentencia de la variable " . $j . " incluyendo el valor\n");
    }
    echo nl2br("\n");
}
?>

<h1>Ejercicio 2</h1>
<hr>
<?php
/* Hacer un código con bucles anidados de variables dependientes que simule lo siguiente:
    - Tienes 2 dados
    - Tiras el primero.
    - Tiras el segundo tantas veces como el valor obtenido del dado 1.
    - Vuelves a tirar el primer dado y repetimos la operación.
    - El primer dado, lo tiramos 3 veces.
*/

for ($i = 0; $i < 3; $i++) {
    $dado1 = mt_rand(1, 6);
    echo nl2br("Dado 1: " . $dado1 . "\n");
    for ($j = 0; $j < $dado1; $j++) {
        echo nl2br("⨽Dado 2(" . ($j + 1) . "): " . mt_rand(1, 6) . "\n");
    }
    echo nl2br("\n");
}
?>

<h1>Ejercicio 3</h1>
<hr>
<?php
/* Crear un código para calcular el factorial de un número, usando la función FOR. */

$numero = 3;
$multiplicacion = 1;

for ($i = $numero; $i > 0; $i--) {
    $multiplicacion = $multiplicacion * $i;
}

echo "Resultado: " . $multiplicacion;
?>

<h1>Ejercicio 4</h1>
<hr>
<?php
/* Escribe un programa que cada vez que se ejecute genere un número aleatorio entre 1 y 10.
Acontinuación guarde en una matriz la tabla de multiplicar de dicho número. Obtén el valor
mínimo y máximo de la matriz generada */

$numeroRandom = mt_rand(1, 10);
$tablaMult = [];
$cont = 1;
for ($i = 1; $i <= 10; $i++) {
    $tablaMult[$i - 1] = $numeroRandom * $i;
}

echo "Tabla del " . $numeroRandom . ": ";

foreach ($tablaMult as $num) {
    echo nl2br($numeroRandom."x". $cont . ": " . $num . " | ");
    $cont++;
}

echo nl2br("\n");
echo nl2br("Valor máximo de la matriz generada: " . max($tablaMult) . "\n");
echo nl2br("Valor mínimo de la matriz generada: " . min($tablaMult));
?>

<h1>Ejercicio 5</h1>
<hr>
<?php
/* Enunciado demasiado largo. Resumen:
    -Crea dos arrays independientes para guardar los datos de cada una de las
     tablasanteriores y muestra por pantalla la información de ambas.
    -A continuación une ambas tablas en una sola y muestra los datos de esta nueva tabla.
*/

$claseA = ["nombre" => ["Juan", "María", "Pedro", "Antonio", "Carmen", "Carlos", "Lucía"], "Edad" => [21, 29, 24, 30, 24, 26, 22]];
$claseB = ["nombre" => ["Jaime", "Luisa", "Aitor", "Macarena", "María", "Pedro", "Juan"], "Edad" => [27, 21, 33, 22, 27, 28, 24]];

echo nl2br("Información de la clase A:\n");

foreach ($claseA["nombre"] as $key => $nombre) {
    echo nl2br("⨽" . $nombre . " " . $claseA["Edad"][$key] . " años\n");
}

echo nl2br("\nInformación de la clase B:\n");

foreach ($claseB["nombre"] as $key => $nombre) {
    echo nl2br("⨽" . $nombre . " " . $claseB["Edad"][$key] . " años\n");
}

for ($i = 0; $i < count($claseA["nombre"]); $i++) {
    echo nl2br("⨽" . $claseA["nombre"][$i] . " " . $claseA["Edad"][$i] . " años\n");
    echo nl2br("⨽" . $claseB["nombre"][$i] . " " . $claseB["Edad"][$i] . " años\n");
}


?>

<h1>Ejercicio 6</h1>
<hr>
<?php
/* Generar una matriz con el conjunto de números primos que hay entre dos números
enteros positivos y mostrarlo en pantalla. */
$num1 = 3;
$num2 = 54;
$numerosPrimos = [];

for ($i = $num1; $i <= $num2; $i++) {
    $esPrimo = true;

    if ($i < 2) {
        $esPrimo = false;
    } else {
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $esPrimo = false;
                break;
            }
        }
    }

    if ($esPrimo) {
        $numerosPrimos[] = $i;
    }
}

foreach ($numerosPrimos as $numprim) {
    echo nl2br($numprim . " | ");
}
?>

<h1>Ejercicio 7</h1>
<hr>
<?php 
/* Escriba un programa que muestre una secuencia aleatoria de N bits y su secuencia
complementaria */
$nbits = 10;
$secuencia = "";

for ($i = 0; $i < $nbits; $i++) {
    $secuencia[$i]= mt_rand(0, 1);
}

echo nl2br("Secuencia aleatoria de ". $nbits. " bits: ". $secuencia. "\n");

$secuenciaComplementaria = "";

for ($i = 0; $i < $nbits; $i++) {
    if ($secuencia[$i] == 0) {
        $secuenciaComplementaria[$i] = 1;
    }else $secuenciaComplementaria[$i] = 0;
}

echo nl2br("Secuencia aleatoria de ". $nbits. " bits: ". $secuenciaComplementaria);

?>