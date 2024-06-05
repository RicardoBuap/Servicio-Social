<?php
include "conexion.php";
$id = $_POST['id'];
header('Content-Type: application/json');

// Obtiene la configuración de la gráfica
$consulta = $conexion->query("SELECT tipo, etiquetaY, tituloX, rango FROM grafica WHERE id = $id")->fetch_assoc();

function obtenerDatosNoNulosYGenerarOutput($resultado, $esNumerico = false) {
    $datosNoNulos = [];
    while ($fila = $resultado->fetch_assoc()) {
        foreach ($fila as $valor) {
            if ($valor !== null) {
                $datosNoNulos[] = $esNumerico ? (float)$valor : $valor;
            }
        }
        break; // Asumimos solo una fila de resultados y salimos del ciclo
    }
    return $datosNoNulos;
}

// Obtiene los datos para las etiquetas (labels) y los datasets
$labels = obtenerDatosNoNulosYGenerarOutput($conexion->query("SELECT columna1, columna2, columna3, columna4, columna5, columna6, columna7 FROM grafica WHERE id = $id"), false);
$datosSolDePuebla = obtenerDatosNoNulosYGenerarOutput($conexion->query("SELECT dato1, dato2, dato3, dato4, dato5, dato6, dato7 FROM periodico1 WHERE id = $id"), true);
$datosIntolerancia = obtenerDatosNoNulosYGenerarOutput($conexion->query("SELECT dato1, dato2, dato3, dato4, dato5, dato6, dato7 FROM periodico2 WHERE id = $id"), true);
$datosSintesis = obtenerDatosNoNulosYGenerarOutput($conexion->query("SELECT dato1, dato2, dato3, dato4, dato5, dato6, dato7 FROM periodico3 WHERE id = $id"), true);

// Datos simulados para el ejemplo
$labels = ["Hola", "Ricarodo", "Pamela"];
$datosSolDePuebla = [0, 10, 62];
$datosIntolerancia = [0, 0, 0];
$datosSintesis = [1, 3, 14];

// Conversion de los arreglos PHP a JSON
$labels = json_encode($labels);
$jsonDatosSolDePuebla = json_encode($datosSolDePuebla);
$jsonDatosIntolerancia = json_encode($datosIntolerancia);
$jsonDatosSintesis = json_encode($datosSintesis);

// Construcción del JSON para la gráfica
$datosGrafica = [
    'type' => $consulta['tipo'],
    'data' => [
        'labels' => $labels,
        'datasets' => [
            [
                'label' => 'Sol de Puebla',
                'data' => $datosSolDePuebla,
                'backgroundColor' => 'rgba(142,168,194,255)',
                'hoverBackgroundColor' => 'thistle',
            ],
            [
                'label' => 'Intolerancia',
                'data' => $datosIntolerancia,
                'backgroundColor' => 'rgba(175,215,188,255)',
                'hoverBackgroundColor' => 'thistle',
            ],
            [
                'label' => 'Síntesis',
                'data' => $datosSintesis,
                'backgroundColor' => 'rgba(153,172,197,255)',
                'hoverBackgroundColor' => 'thistle',
            ]
        ]
    ],
    'options' => [
        'responsive' => true,
        'maintainAspectRatio' => false,
        'scales' => [
            'y' => [
                'beginAtZero' => true,
                'max' => intval($consulta['rango']),
                'title' => [
                    'text' => $consulta['etiquetaY'],
                    'color' => 'rgba(150,150,183,255)',
                    'display' => true,
                ]
            ],
            'x' => [
                'title' => [
                    'text' => $consulta['tituloX'],
                    'color' => 'rgba(150,150,183,255)',
                    'display' => true,
                ]
            ]
        ]
    ]
];

echo json_encode($datosGrafica);
?>
