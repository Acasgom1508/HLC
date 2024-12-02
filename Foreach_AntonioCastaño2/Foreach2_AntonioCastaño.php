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

/* ACTIVIDAD 2: Mostrar solo las estaciones que son intercambiadores */
echo "<h1>ACTIVIDAD 2: Mostrar solo las estaciones que son intercambiadores</h1>";
/* Recorro la matriz */
foreach ($estacionesMetroMadrid as $estaciones => $infoEstacion) {
    /* Indico la linea */
    echo nl2br("Línea: $estaciones\n");
    /* Creo una lista para que se vea mejor */
    echo "<ul>";
    /* Recorro las estaciones */
    foreach ($infoEstacion as $estacion) {
        /* Si la estacion tiene intercambiador, la muestro */
        if ($estacion['intercambiador'] == true) {
            echo nl2br("<li> {$estacion['estacion']}: Intercambiador: " . ($estacion['intercambiador'] ? 'Sí' : 'No') . "</li>");
        }
    }
    /* Cierro la lista */
    echo "</ul>";
    echo nl2br("\n");
}
