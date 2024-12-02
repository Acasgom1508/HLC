<?php
/* Matriz de las estaciones */
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

/* Creo una nueva estacion usando la estructura de la otra matriz */
$nuevaEstacion = ['Línea 4' => [
    ['estacion' => 'NuevaEstacion', 'intercambiador' => true],
],];

/* La añando a la otra matriz */
$estacionesMetroMadrid += $nuevaEstacion;

/* ACTIVIDAD 3: Añadir un nuevo intercambiador y mostrar la matriz */
echo "<h1>ACTIVIDAD 3: Añadir un nuevo intercambiador y mostrar la matriz</h1>";
/* Recorro la matriz */
foreach ($estacionesMetroMadrid as $estaciones => $infoEstacion) {
    /* Indico la linea */
    echo nl2br("Línea: $estaciones\n");
    /* Creo una lista para que se vea mejor */
    echo "<ul>";
    /* Recorro las estaciones de la matriz */
    foreach ($infoEstacion as $estacion) {
        /* Indico el nombre y si tiene o no intercambiadores */
        echo nl2br("<li> {$estacion['estacion']}: Intercambiador: " . ($estacion['intercambiador'] ? 'Sí' : 'No') . "</li>");
    }
    /* Cierro la lista */
    echo "</ul>";
    echo nl2br("\n");
}
