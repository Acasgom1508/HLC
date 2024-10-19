<h1>Crear una matriz</h1>
<h2>Ejercicio 1</h2>
<hr>
<?php
/* Crea una matriz que contenga los nombres de cinco colores y luego
imprime el tercer color en la matriz.*/

//Creo la matriz de colores
$colores = [
    ["Rojo", "#b22222"],
    ["Verde", "#32cd32"],
    ["Amarillo", "#ff0"],
    ["Azul", "#326fcd"],
    ["Naranja", "#f4a460"]];
//Pido la posicion que se quiere mostrar por pantalla,
//la guardo en una variable y le resto 1 para que esté en la posición correcta dentro de la matriz
$posicion = 3;
$posicion -= 1;
//Muestro el color por pantalla
echo "<p style='background-color:" . $colores[$posicion][1] . "'>Color en la posición 3: " . $colores[$posicion][0] . "</p>";
?>

<br>
<br>
<h2>Ejercicio 2</h2>
<hr>
<?php
/* Ejercicio: Crea una matriz asociativa para almacenar información de un coche
(marca, modelo, año) y luego imprime el valor del modelo. */

//Creo la matriz asociativa de coches
$coches = [
    ["marca"=>"volkswagen", "modelo"=>"Golf", "año"=>2010]];

//Muestro por pantalla el modelo del coche
echo "<p>Modelo del coche: ". $coches[0]["modelo"]. "</p>";
?>

<br>
<br>
<h1>Matrices multidimensionales</h1>
<h2>Ejercicio 3</h2>
<hr>
<?php
/* Crea una matriz multidimensional que contenga información de tres
estudiantes (nombre, edad, nota). Imprime el nombre del segundo estudiante. */

//Creo la matriz multidimensional de estudiantes
$estudiantes = [
    ["nombre"=>"Pedro", "edad"=>18, "nota"=>8],
    ["nombre"=>"Juan", "edad"=>19, "nota"=>5],
    ["nombre"=>"Maria", "edad"=>17, "nota"=>3]];

//Muestro por pantalla el nombre del segundo estudiante
echo "<p>Nombre del segundo estudiante: ". $estudiantes[1]["nombre"]. "</p>";
?>

<br>
<br>
<h1>Imprimir todos los valores de una matriz</h1>
<h2>Ejercicio 4</h2>
<hr>
<?php
/* Crea una matriz con los días de la semana y usa la función print_r()
para imprimirla. */
//Creo la matriz de días de la semana
$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

//imprimo la matriz usando print_r()
print_r($dias);
?>

<br>
<br>
<h1>Añadir elementos a una matriz</h1>
<h2>Ejercicio 5</h2>
<hr>
<?php
/* Crea una matriz con tres números y añade dos números más a la matriz. */
//Creamos la matriz de números
$numeros = [1,2,3];

//Añadimos dos nuevos elementos a la matriz
$numeros[] = 4;
$numeros[] = 5;

//Mostramos la matriz por pantalla
print_r($numeros);
?>

<br>
<br>
<h1>Unión de matrices</h1>
<h2>Ejercicio 6</h2>
<hr>
<?php
/* Crea dos matrices, una con los nombres de tres frutas y otra con tres
verduras. Únelas en una sola matriz */
//Creamos las matrices de frutas y verduras
$frutas = ["Manzana", "Pera", "Uva"];
$verduras = ["Zanahoria", "Pimiento","Tomate"];

//Unimos las matrices en una sola matriz utilizando array_merge()
$tienda = array_merge($frutas, $verduras);

//Mostramos la matriz por pantalla
print_r($tienda);
?>

<br>
<br>
<h1>Más información general sobre las matrices</h1>
<h2>Ejercicio 7</h2>
<hr>
<?php
/* Crea una matriz con tres valores, utiliza count() para mostrar cuántos
elementos tiene */

//Creamos la matriz de valores
$valores = [1,2,3];

//Mostramos la cantidad de elementos utilizando count()
echo "La matriz tiene ". count($valores). " elementos.";
?>

<br>
<br>
<h1>Borrar una matriz o elementos de una matriz</h1>
<h2>Ejercicio 8</h2>
<hr>
<?php
/* Crea una matriz con cinco números y elimina el tercer número usando
unset() */

//Creamos la matriz de números
$numeros = [1,2,3,4,5];

//Borramos el tercer número utilizando unset()
unset($numeros[2]);

//Mostramos la matriz por pantalla para ver el resultado del borrado
print_r($numeros);
?>

<br>
<br>
<h1>Copiar una matriz</h1>
<h2>Ejercicio 9</h2>
<hr>
<?php
/* Crea una matriz y luego copia sus valores a otra variable. */

//Creamos la matriz 1
$matriz1 = [1,2,3,4,5];

//Creamos una matriz vacía y la rellenamos con el contrenido de la matriz 1
$matriz2 = $matriz1;

//Mostramos las dos matrices para ver el resultado de la copia
echo "Matriz 1: ";
print_r($matriz1);
echo "<br> Matriz 2: ";
print_r($matriz2);
?>