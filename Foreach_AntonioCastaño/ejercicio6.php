<!DOCTYPE html>
<html>

<head>
    <title>Buscar en Comunidades</title>
</head>

<body>
    <h1>Buscar en Comunidades</h1>
    <form method="POST" action="">
        <label for="buscar">Buscar por comunidad, provincia o
            capital:</label>
        <input type="text" id="buscar" name="buscar">
        <button type="submit">Buscar</button>
    </form>

    <?php
    $comunidades = [
        'Andalucía' => [
            'provincias' => [
                'Sevilla' => ['poblacion' => 688711],
                'Cádiz' => ['poblacion' => 116979],
                'Córdoba' => ['poblacion' => 325701],
                'Granada' => ['poblacion' => 232462],
                'Málaga' => ['poblacion' => 578460],
                'Jaén' => ['poblacion' => 112999],
                'Huelva' => ['poblacion' => 143837]
            ],
            'capital' => ['Sevilla' => [
                'poblacion' => 742940,
                'informacion_adicional' => 'Capital histórica de al-Andalus.'
            ]],
        ],
        'Cataluña' => [
            'provincias' => [
                'Barcelona' => ['poblacion' => 1620343],
                'Girona' => ['poblacion' => 101852],
                'Lleida' => ['poblacion' => 137387],
                'Tarragona' => ['poblacion' => 134515]
            ],
            'capital' => ['Barcelona' => [
                'poblacion' => 1620343,
                'informacion_adicional' => 'Ciudad cosmopolita y centro económico.'
            ]],
        ],
        'Castilla y León' => [
            'provincias' => [
                'Ávila' => ['poblacion' => 58083],
                'Burgos' => ['poblacion' => 175821],
                'León' => ['poblacion' => 124303],
                'Salamanca' => ['poblacion' => 144228],
                'Segovia' => ['poblacion' => 51574],
                'Soria' => ['poblacion' => 39215],
                'Valladolid' => ['poblacion' => 298412],
                'Zamora' => ['poblacion' => 60105]
            ],
            'capital' => ['Valladolid' => [
                'poblacion' => 304875,
                'informacion_adicional' => 'Ciudad universitaria y cuna del castellano.'
            ]],
        ],
        'Galicia' => [
            'provincias' => [
                'A Coruña' => ['poblacion' => 246056],
                'Lugo' => ['poblacion' => 98176],
                'Ourense' => ['poblacion' => 105233],
                'Pontevedra' => ['poblacion' => 83029]
            ],
            'capital' => ['Santiago de Compostela' => [
                'poblacion' => 97185,
                'informacion_adicional' => 'Ciudad histórica y sede del Camino de Santiago.'
            ]],
        ],
        'País Vasco' => [
            'provincias' => [
                'Álava' => ['poblacion' => 331549],
                'Guipúzcoa' => ['poblacion' => 727121],
                'Vizcaya' => ['poblacion' => 1156626]
            ],
            'capital' => ['Vitoria-Gasteiz' => [
                'poblacion' => 252727,
                'informacion_adicional' => 'Capital del País Vasco y ciudad verde.'
            ]],
        ],
    ];



    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['provincia'])) {
        $buscador = $_POST['buscar'];
        $encontrado = false;

        // Recorremos las comunidades y las provincias para buscar la provincia introducida
        // He tenido que buscar informacion en internet para hacer alguna partde de este ejercicio
        foreach ($comunidades as $comunidad => $valores) {
            if (isset($valores['provincias'][$buscador])) {
                $datosProvincia = $valores['provincias'][$buscador];
                $capital = array_key_exists($buscador, $valores['capital']) ? $valores['capital'][$buscador] : null;

                echo "<h2>Provincia: $buscador</h2>";
                echo "<p>Comunidad Autónoma: $comunidad</p>";
                echo "<p>Población: " . $datosProvincia['poblacion'] . "</p>";

                if ($capital) {
                    echo "<h3>Capital: $buscador</h3>";
                    echo "<p>Población de la capital: " . $capital['poblacion'] . "</p>";
                    echo "<p>Información adicional: " . $capital['informacion_adicional'] . "</p>";
                }

                $encontrado = true;
                break;
            }
        }

        if (!$encontrado) {
            echo "<p>Provincia no encontrada.</p>";
        }
    }
    ?>

</body>

</html>