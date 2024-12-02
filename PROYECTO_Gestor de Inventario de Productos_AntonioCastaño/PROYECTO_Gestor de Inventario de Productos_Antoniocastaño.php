<?php
//Definir arrays para el inventario actual, proveedor A y proveeodr B
$inventario_actual = [
    ["producto" => "Teclado", "precio" => 20, "categoria" => "Electrónica", "cantidad" => 4],
    ["producto" => "Raton", "precio" => 15, "categoria" => "Electrónica", "cantidad" => 10],
    ["producto" => "Monitor", "precio" => 100, "categoria" => "Electrónica", "cantidad" => 3],
    ["producto" => "Silla", "precio" => 80, "categoria" => "Muebles", "cantidad" => 5],
];

$proveedor_a = [
    ["producto" => "Raton", "precio" => 10, "categoria" => "Electrónica", "cantidad" => 20],
    ["producto" => "Lámpara", "precio" => 25, "categoria" => "Iluminación", "cantidad" => 15],
    ["producto" => "Escritorio", "precio" => 50, "categoria" => "Muebles", "cantidad" => 2],
];

$proveedor_b = [
    ["producto" => "Monitor", "precio" => 92, "categoria" => "Electrónica", "cantidad" => 8],
    ["producto" => "Auriculares", "precio" => 30, "categoria" => "Electrónica", "cantidad" => 20],
    ["producto" => "Lámpara", "precio" => 20, "categoria" => "Iluminación", "cantidad" => 5],
];

$inventario_actual_producto = [];

foreach ($inventario_actual_producto as $fila) {
    $inventario_actual_producto[] = $fila['producto'];
}

$proveedor_a_producto = [];

foreach ($preoveedor_a as $fila) {
    $proveedor_a_producto[] = $fila['producto'];
}

$proveedor_b_producto = [];

foreach ($preoveedor_b as $fila) {
    $proveedor_b_producto[] = $fila['producto'];
}

print_r(array_diff($inventario_actual_producto,array_merge($proveedor_a_producto, $proveedor_b_producto)));
echo nl2br("\n");