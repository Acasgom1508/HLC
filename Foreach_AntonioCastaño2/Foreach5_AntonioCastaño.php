<?php
$estacionesMetroMadrid = [
    'Línea 1' => [
        ['estacion' => 'Sol', 'intercambiador' => true],
        ['estacion' => 'Gran Vía', 'intercambiador' => false],
        ['estacion' => 'Tribunal', 'intercambiador' => false],
    ],
    'Línea 2' => [
        ['estacion' => 'Cuatro Caminos', 'intercambiador' => true],
        ['estacion' => 'La Elipa', 'intercambiador' => false],
        ['estacion' => 'Ventas', 'intercambiador' => false],
    ],
    'Línea 3' => [
        ['estacion' => 'Villaverde Alto', 'intercambiador' => false],
        ['estacion' => 'Sierra de Guadalupe', 'intercambiador' => true],
        ['estacion' => 'Emilia Pardo Bazán', 'intercambiador' => false],
    ],
    'Línea 10' => [
        ['estacion' => 'Nuevo Ministerios', 'intercambiador' => true],
        ['estacion' => 'Chamartín', 'intercambiador' => true],
        ['estacion' => 'Berruguete', 'intercambiador' => false],
    ]
];

/* Contador que cuenta intercambiador */
$totalIntercambiadores = 0;

/* ACTIVIDAD 5: Calcular cuántos intercambiadores hay en total */
echo "<h1>ACTIVIDAD 5: Calcular cuántos intercambiadores hay en total</h1>";
/* Recorro la matriz */
foreach ($estacionesMetroMadrid as $estaciones => $infoEstacion) {
    /* Recorro las matrices de la mantriz anterior */
    foreach ($infoEstacion as $estacion) {
        /* Compruebo que haya intercambiado. En caso de que haya, sumo uno al contador. Si no, sigo buscando */
        if ($estacion['intercambiador'] == true) {
            $totalIntercambiadores ++;
        }
    }
}

/* Muestro por pantalla el total de intercambiadores */
echo "Total de intercambiadores: ".$totalIntercambiadores;