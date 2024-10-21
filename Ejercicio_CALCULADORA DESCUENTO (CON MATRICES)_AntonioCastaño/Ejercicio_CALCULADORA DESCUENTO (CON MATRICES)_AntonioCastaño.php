<!-- 
 Se pide que  completemos el proyecto de la calculadora utilizando matrices y constantes en el código.  
 En tu código debe :
-->

<?php
//1.Uso de matrices para almacenar al menos tres productos y sus datos: nombre, cantidad y precio unitario.
$productos = [
    ["nombre" => "Gublins de queso", "cantidad" => 10, "precio_unitario" => 5.5],
    ["nombre" => "Pantalón", "cantidad" => 60, "precio_unitario" => 3],
    ["nombre" => "Camiseta", "cantidad" => 120, "precio_unitario" => 7]
];

//2.Constantes: define las constantes DESCUENTO_PEQUENO, LIMITE_DESCUENTO y LIMITE_COMPRA_GRANDE para almacenar valores fijos, como los límites y el porcentaje de descuento. 
define("DESCUENTO_PEQUENO", 0.10);
define("DESCUENTO", 0.05);
define("LIMITE_DESCUENTO", 50);
define("LIMITE_COMPRA_GRANDE", value: 100);

foreach ($productos as $producto) {
    //3.Operaciones aritméticas: calcula el total sin descuento y luego aplica un descuento del 10% si el total supera los 50 unidades.
    //9.Conversión de tipos de datos: realiza conversiones explícitas de float a string y de integer a float para ilustrar cómo cambiar los tipos de variables en PHP. 
    $total_sin_descuento = (float)$producto["cantidad"] * (float)$producto["precio_unitario"];
    $total_con_descuento = 0;
    //6.Uso de operadores lógicos: Usa el operador > se utilizó para determinar si el total sin descuento supera los 50 (para aplicar descuento) o los 100 (para determinar si es una compra grande).
    if ($producto["cantidad"] >= LIMITE_DESCUENTO) {
        $descuento = $total_sin_descuento * DESCUENTO_PEQUENO;
        $total_con_descuento = $total_sin_descuento - $descuento;
    }
    
    if ($total_sin_descuento >= LIMITE_COMPRA_GRANDE) {
        $descuento = $total_con_descuento * DESCUENTO;
        $total_con_descuento = $total_con_descuento - $descuento;
    }

    //4.Formateo de números: usa number_format() para asegurar que los valores monetarios (precio y total) se muestren con dos decimales.
    //5.Concatenación de cadenas: usa el operador . para concatenar cadenas en el resumen de la compra.
    //8.Saltos de línea y caracteres especiales: Usa  para manejar saltos de línea en la salida HTML,  \n y luego la función nl2br() para convertir esos saltos a etiquetas <br>.

    //usando lo anterior, muestro el nombre del producto, la cantidad y el precio unitario, ya que es lo único que va a tener cada producto si o si.
    echo nl2br("<hr><p>Producto: " . $producto["nombre"].
        "\nCantidad: ". $producto["cantidad"].
        "\nPrecio unitario: ". number_format($producto["precio_unitario"], 2,",","."). "€\n");

    //Dependiendo de si se aplicó descuento o no, muestro el precio sin descuento y el con descuento. Si no se aplicó descuento, muestro el precio sin descuento.
    if ($total_con_descuento == 0){
        echo nl2br("Precio: ". number_format($total_sin_descuento, 2,",",".")."€ > No se aplica ningún descuento</p>");
    } else{
        echo nl2br("Precio sin descuento: ". number_format($total_sin_descuento, 2,",",".").
        "€\nPrecio con descuento: ". number_format($total_con_descuento, 2,",","."). "€</p>");
    }
}
?>