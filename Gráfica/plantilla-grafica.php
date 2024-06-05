<style>
    .grafica {
        width: 100%;
    }

    @media (min-width: 400px) {
        .grafica {
            width: 80%;
        }
    }

    @media (min-width: 1024px) {
        .grafica {
            width: 60%;
        }
    }

    @media (min-width: 1200px) {
        .grafica {
            width: 50%;
        }
    }
    </style>
<body>
    <?php
        include "conexion.php";
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        // $id = $_GET["id"];
        // $id = 2;
        // $id = $_POST['id'];
        $consulta  = $conexion -> query("SELECT mes, año, descripcion, tipo, etiquetaY, tituloX, rango FROM grafica WHERE id = $id");
        $consulta2 = $conexion -> query("SELECT columna1, columna2, columna3, columna4, columna5, columna6, columna7 FROM grafica WHERE id = $id");
        $consulta3 = $conexion -> query("SELECT dato1, dato2, dato3, dato4, dato5, dato6, dato7 FROM periodico1 WHERE id = $id");
        $consulta4 = $conexion -> query("SELECT dato1, dato2, dato3, dato4, dato5, dato6, dato7 FROM periodico2 WHERE id = $id");
        $consulta5 = $conexion -> query("SELECT dato1, dato2, dato3, dato4, dato5, dato6, dato7 FROM periodico3 WHERE id = $id");
    ?>
    <?php while($fila = $consulta -> fetch_assoc()) {?>
    <div class="container-fluid m-0 d-flex flex-column align-items-center justify-content-center grafica">
        <div class="container my-5" style="border: 3px solid #285576; border-radius: 30px;">
            <div class="row my-3">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h1 class="titulo roboto-bold">
                        <?php
                            $dato1 = $fila['mes'];
                            $dato2 = $fila['año'];
                            echo "$dato1 $dato2";
                        ?>
                    </h1>
                </div>
                <!-- <div class="col-6 d-flex flex-column align-items-center">
                    <i class="bi bi-x-circle-fill" style="color: #9b97ca; font-size: 30px;"></i>
                </div> -->
            </div>
            <div class="row d-flex flex-column align-items-center">
                <div class="col-12" style="width:100%">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="row my-3 d-flex flex-column align-items-center">
                <div class="col-12">
                    <p class="parrafo roboto-light-italic mx-2 text-center" style="color: #959595;">
                        <?php
                            $dato3 = $fila['descripcion'];
                            echo "$dato3";
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
        function obtenerDatosNoNulosYGenerarOutput($consulta) {
            $datosNoNulos = array();
            while ($recorrer = $consulta->fetch_assoc()) {
                foreach ($recorrer as $clave => $valor) {
                    if ($valor !== null) {
                        $datosNoNulos[] = $valor;
                    }
                }
            }
        
            $output = "";
            $primeraIteracion = true;
            foreach ($datosNoNulos as $dato) {
                if (!$primeraIteracion) {
                    $output .= ", ";
                }
                $output .= "'".$dato."'";
                $primeraIteracion = false;
            }
            
            return $output;
        }
        // Usando la función para simplificar el código original
        $output = obtenerDatosNoNulosYGenerarOutput($consulta2);
        $output2 = obtenerDatosNoNulosYGenerarOutput($consulta3);
        $output3 = obtenerDatosNoNulosYGenerarOutput($consulta4);
        $output4 = obtenerDatosNoNulosYGenerarOutput($consulta5); 
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: '<?php $dato4 = $fila['tipo']; echo "$dato4";?>',
        data: {
        color:'#3b7f56',
        labels: [<?php echo $output?>],
        datasets: [
            {
                label:'Sol de Puebla',
                data: [<?php echo "$output2"; ?>],
                backgroundColor:'rgba(142,168,194,255)',
                hoverBackgroundColor:'thistle',
            },
            {
                label:'Intolerancia',
                data: [<?php echo "$output3"; ?>],
                backgroundColor:'rgba(175,215,188,255)',
                hoverBackgroundColor:'thistle',
            },
            {
                label:'Síntesis',
                data: [<?php echo "$output4"; ?>],
                backgroundColor:'rgba(153,172,197,255)',
                hoverBackgroundC3olor:'thistle',
            }]
        },
        options: {
        responsive : true,
        maintainAspectRatio:false,
        aspectRatio:1,
        scales: {
            y: {
            beginAtZero: true,
            min:0,
            max:<?php $dato6 = $fila['rango']; echo "$dato6";?>,

            title:{
                color:'rgba(150,150,183,255)',
                display:true,
                align:'center',
                text:'<?php $dato5 = $fila['etiquetaY']; echo $dato5; ?>'
            },
            },
            x:{
            title:{
                display:true,
                align:'center',
                color:'rgba(150,150,183,255)',
                text:'<?php $dato7 = $fila['tituloX']; echo $dato7; ?>'
            },
            ticks:{
                color:'rgba(150,150,183,255)',
            },
            grid:{
                display:false
            }
            }
                },
                plugins: {
                }
            }
            });
</script>
<?php } ?>