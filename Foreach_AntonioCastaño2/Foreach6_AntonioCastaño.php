<!DOCTYPE html>
<html>

<head>
    <title>ACTIVIDAD 4</title>
</head>

<body>
    <h1>Buscar estaciones por nombre y mostrar si es un intercambiador o no</h1>
    <form method="POST" action="">
        <label for="buscar">Buscar intercambiadores por línea o
            estación:</label>
        <input type="text" id="buscar" name="buscar">
        <button type="submit">Buscar</button>
    </form>

    
    <?php
    /* Matriz con las estaciones */
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

    /* Obtengo el valor del input */
    $input = $_POST['buscar'];
    /* Creo un booleano para saber si se ha encontrado o si no */
    $encontrada = false;

    /* recorro la matriz de linea */
    foreach ($estacionesMetroMadrid as $estaciones => $infoEstacion) {
        /* Recorro las estaciones */
        foreach ($infoEstacion as $estacion) {
            /* Compruebo si el texto introducido es una estacion */
            if ($input == $estacion['estacion']) {
                /* La muestro por pantalla */
                echo "{$estacion['estacion']}: Intercambiador: " . ($estacion['intercambiador'] ? 'Sí' : 'No');
                $encontrada = true;
                break;
            }
        }

        /* Si no es una estacion, busco a ver si es una linea. Si es una linea, muestro sus estaciones */
        if ($input == $estaciones) {
            echo nl2br("$estaciones");
            /* Creo una lista para que se vea mejor */
            echo "<ul>";
            foreach ($infoEstacion as $estacion) {
                /* Muestro de cada estacion si tiene intercambiador */
                echo nl2br("<li> {$estacion['estacion']}: Intercambiador: " . ($estacion['intercambiador'] ? 'Sí' : 'No') . "</li>");
            }
            echo "</ul>";
            echo nl2br("\n");
            $encontrada = true;
            break;
        }
    }

    /* Si no se encuentra se lo hago saber al usuario */
    if (!$encontrada) {
        echo "No se ha encontrado la estación o la linea.";
    }

    ?>

</body>

</html>