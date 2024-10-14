<!-- 
Se pide que para un producto concreto , una cantidad definida y un precio fijo ( a la elección del estudiante ) 
se aplique un descuento según ciertos criterios. Y se genere un resumen que muestre los detalles de la compra, 
aplicando operaciones con distintos tipos de datos y formatos de salida. A lo largo del proyecto se deben 
utilizar las características vistas para el apartado TIPOS DE VARIABLES ( al menos se deben usar 10 de ellas ). 
Coméntalas en el código para identificarlas.
El proyecto tomará los siguientes pasos:
-->

<?php
//1. Solicitar al usuario datos sobre un producto (nombre del producto, cantidad, precio). 
//A la vez voy haciendo el punto 4 (Mostrar un resumen con uso de variables, cadenas, saltos de línea y concatenación).
$nombreProducto = "Camisetas"; // Declaro el nombre del producto
$cantidad = 52; //Declaro la cantidad de producos(entero)
$precio = 24.99; //Declaro el precio del producto(float)
$descuento = 70 / 100; //Declaro el descuento como un porcentaje(float)
$mitad_de_precio = false;
if($descuento>=0.5){
    $mitad_de_precio = true;//Si el descuento es mayor o igual al 50% se establece la variable a true
}

//Mostramos los datos introducidos por el usuario

echo "Nombre del producto: ".$nombreProducto."<br>";
echo "Cantidad de productos: ".$cantidad."<br>";
echo "Precio del producto: ".$precio."€<br>";
echo "Descuento aplicado: ".($descuento*100)."%<br>";

// Mostrar si es mitad de precio
if($mitad_de_precio) {
    echo "El descuento es igual o mayor al 50%<br>";
} else {
    echo "El descuento es menor al 50%<br>";
}


//2. Calcular el total de la compra antes y después de aplicar un descuento.
$precioTotal = $precio * $cantidad; //Calcculamos el precio total antes del descuento
$precioDescontado = ($precio * (1 - $descuento)) * $cantidad; //Calculamos el precio ya con el descuento realizado

//3. Mostrar el total con formato de moneda. Para lo que usaréis number_format()
echo "Precio total con formato moneda ".number_format($precioTotal,2,"'",',')."€<br>";//Mostramos los resultados por pantalla
echo "Precio total con descuento con formato moneda ".number_format($precioDescontado,2,"'",',')."€<br>";//Mostramos los resultados por pantalla

//5. Usar operadores lógicos y operaciones aritméticas para calcular descuentos.
//6. Realizar conversiones de tipos de datos cuando sea necesario. 
?>