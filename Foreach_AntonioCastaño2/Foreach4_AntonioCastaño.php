<!DOCTYPE html>
<html>

<head>
    <title>ACTIVIDAD 4</title>
</head>

<body>
    <h1>Buscar estaciones por nombre y mostrar si es un intercambiador o no</h1>
    <form method="POST" action="">
        <label for="buscar">Buscar intercambiadores por estacion:</label>
        <input type="text" id="buscar" name="buscar">
        <button type="submit">Buscar</button>
    </form>

    <?php
    /* Matriz */
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

    /* Recibo el input */
    $input = $_POST['buscar'];
    /* Creo un booleano para ver si ha sido encontrada */
    $encontrada = false;

    /* Recorro la matriz */
    foreach ($estacionesMetroMadrid as $estaciones => $infoEstacion) {
        /* recorro las estaciones */
        foreach ($infoEstacion as $estacion) {
            /* Compruebo cada estacion paa ver si corresponde a la que ha intentado buscar el usuario */
            if ($input == $estacion['estacion']) {
                /* Si se encuentra la mostrará por pantalla */
                echo "{$estacion['estacion']}: Intercambiador: " . ($estacion['intercambiador'] ? 'Sí' : 'No');
                $encontrada = true;
                break;
            }
        }
    }

    /* Si no la encuentra se lo hace saber al usuario */
    if (!$encontrada) {
        echo "No se ha encontrado la estación.";
    }

    ?>

</body>

</html>