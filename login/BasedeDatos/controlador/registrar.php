<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../../login.php");
    }
    if(!empty($_POST["btnregistrar"])){//Validar que se ha seleccionado el botón
        if(!empty($_POST["categoria"]) and !empty($_POST["descripcion"]) and (!empty($_POST["rango"])
            and !empty($_POST["etiquetaY"]) and !empty($_POST["etiquetaX"]) and $_POST["rango"] >0)){
                $mes = $_POST["mes"];
                $año = $_POST["año"];
                $categoria = $_POST["categoria"];
                $descripcion = $_POST["descripcion"];
                $rango = $_POST["rango"];
                $etiquetaY = $_POST["etiquetaY"];
                $etiquetaX = $_POST["etiquetaX"];
                $tipo = $_POST["grafico"];
                if(!empty($_POST["columna1"]) and !empty($_POST["columna2"]) and !empty($_POST["columna3"])
                    and !empty($_POST["columna4"]) and !empty($_POST["columna5"])){
                        $columna1 = $_POST["columna1"];$columna2 = $_POST["columna2"];$columna3 = $_POST["columna3"];
                        $columna4 = $_POST["columna4"];$columna5 = $_POST["columna5"];
                        $dato1periodico1 = $_POST["dato1periodico1"];$dato1periodico2 = $_POST["dato1periodico2"];$dato1periodico3 = $_POST["dato1periodico3"];
                        $dato2periodico1 = $_POST["dato2periodico1"];$dato2periodico2 = $_POST["dato2periodico2"];$dato2periodico3 = $_POST["dato2periodico3"];
                        $dato3periodico1 = $_POST["dato3periodico1"];$dato3periodico2 = $_POST["dato3periodico2"];$dato3periodico3 = $_POST["dato3periodico3"];
                        $dato4periodico1 = $_POST["dato4periodico1"];$dato4periodico2 = $_POST["dato4periodico2"];$dato4periodico3 = $_POST["dato4periodico3"];
                        $dato5periodico1 = $_POST["dato5periodico1"];$dato5periodico2 = $_POST["dato5periodico2"];$dato5periodico3 = $_POST["dato5periodico3"];
                        $sql = $conexion -> query("INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2, columna3, columna4, columna5) 
                        VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2','$columna3','$columna4','$columna5')");
                        if($sql==1){
                            //Consulta que se realiza para buscar el último id ingresado
                            $sql2 = $conexion -> query("SELECT id from grafica ORDER BY id DESC LIMIT 1");
                            if ($sql2->num_rows > 0) {
                                while($fila = $sql2->fetch_assoc()) {
                                    $id = $fila["id"];
                                }
                                //Inserciones a los tres periódicos!
                                $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2,dato3,dato4,dato5) VALUES ('$id','$dato1periodico1',$dato2periodico1,$dato3periodico1,$dato4periodico1,$dato5periodico1)");
                                $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2,dato3,dato4,dato5) VALUES ('$id','$dato1periodico2',$dato2periodico2,$dato3periodico2,$dato4periodico2,$dato5periodico2)");
                                $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2,dato3,dato4,dato5) VALUES ('$id','$dato1periodico3',$dato2periodico3,$dato3periodico3,$dato4periodico3,$dato5periodico3)");
                            }
                            // header("Location: index.php");
                            // echo '<div class = "alert alert-success">Se ha ingresado correctamente la gráfica</div>';
                            echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                                echo '<div class="modal-dialog">';
                                    echo '<div class="modal-content">';
                                        echo '<div class="modal-header">';
                                            echo '<h5 class="Mensaje" id="exampleModalLabel">Éxito!</h5>';
                                            echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                                        echo '</div>';
                                        echo '<div class="modal-body">';
                                            echo '<p>Se ha ingresado exitosamente la gráfica!.</p>';
                                        echo '</div>';
                                        echo '<div class="modal-footer">';
                                            echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            echo '<script>';
                                echo 'document.addEventListener("DOMContentLoaded", function() {';
                                echo 'var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));';
                                echo 'myModal.show();';
                                echo '});';
                            echo '</script>';
                        }
                        else{
                            echo '<div class = "alert alert-danger">Algó salió mal!</div>';
                            header("Location: ../vista/index.php");}
                }
                else if(!empty($_POST["columna1"]) and !empty($_POST["columna2"]) and !empty($_POST["columna3"])
                    and !empty($_POST["columna4"])){
                        $columna1 = $_POST["columna1"];$columna2 = $_POST["columna2"];$columna3 = $_POST["columna3"];
                        $columna4 = $_POST["columna4"];
                        $dato1periodico1 = $_POST["dato1periodico1"];$dato1periodico2 = $_POST["dato1periodico2"];$dato1periodico3 = $_POST["dato1periodico3"];
                        $dato2periodico1 = $_POST["dato2periodico1"];$dato2periodico2 = $_POST["dato2periodico2"];$dato2periodico3 = $_POST["dato2periodico3"];
                        $dato3periodico1 = $_POST["dato3periodico1"];$dato3periodico2 = $_POST["dato3periodico2"];$dato3periodico3 = $_POST["dato3periodico3"];
                        $dato4periodico1 = $_POST["dato4periodico1"];$dato4periodico2 = $_POST["dato4periodico2"];$dato4periodico3 = $_POST["dato4periodico3"];
                        $sql = $conexion -> query("INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2, columna3, columna4) 
                        VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2','$columna3','$columna4')");
                        if($sql==1){
                            //Consulta que se realiza para buscar el último id ingresado
                            $sql2 = $conexion -> query("SELECT id from grafica ORDER BY id DESC LIMIT 1");
                            if ($sql2->num_rows > 0) {
                                while($fila = $sql2->fetch_assoc()) {
                                    $id = $fila["id"];
                                }
                                $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2,dato3,dato4) VALUES ('$id','$dato1periodico1',$dato2periodico1,$dato3periodico1,$dato4periodico1)");
                                $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2,dato3,dato4) VALUES ('$id','$dato1periodico2',$dato2periodico2,$dato3periodico2,$dato4periodico2)");
                                $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2,dato3,dato4) VALUES ('$id','$dato1periodico3',$dato2periodico3,$dato3periodico3,$dato4periodico3)");
                            }
                            // header("Location: index.php");
                            echo '<div class = "alert alert-success">Se ha ingresado correctamente la gráfica</div>';
                            echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                                echo '<div class="modal-dialog">';
                                    echo '<div class="modal-content">';
                                        echo '<div class="modal-header">';
                                            echo '<h5 class="Mensaje" id="exampleModalLabel">Éxito!</h5>';
                                            echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                                        echo '</div>';
                                        echo '<div class="modal-body">';
                                            echo '<p>Se ha ingresado exitosamente la gráfica!.</p>';
                                        echo '</div>';
                                        echo '<div class="modal-footer">';
                                            echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            echo '<script>';
                                echo 'document.addEventListener("DOMContentLoaded", function() {';
                                echo 'var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));';
                                echo 'myModal.show();';
                                echo '});';
                            echo '</script>';}
                        else{
                            echo '<div class = "alert alert-danger">Algó salió mal!</div>';
                            header("Location: ../vista/index.php");}
                }
                else if(!empty($_POST["columna1"]) and !empty($_POST["columna2"]) and !empty($_POST["columna3"])){
                        $columna1 = $_POST["columna1"];$columna2 = $_POST["columna2"];$columna3 = $_POST["columna3"];
                        $dato1periodico1 = $_POST["dato1periodico1"];$dato1periodico2 = $_POST["dato1periodico2"];$dato1periodico3 = $_POST["dato1periodico3"];
                        $dato2periodico1 = $_POST["dato2periodico1"];$dato2periodico2 = $_POST["dato2periodico2"];$dato2periodico3 = $_POST["dato2periodico3"];
                        $dato3periodico1 = $_POST["dato3periodico1"];$dato3periodico2 = $_POST["dato3periodico2"];$dato3periodico3 = $_POST["dato3periodico3"];
                        $sql = $conexion -> query("INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2, columna3) 
                        VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2','$columna3')");
                        if($sql==1){
                            //Consulta que se realiza para buscar el último id ingresado
                            $sql2 = $conexion -> query("SELECT id from grafica ORDER BY id DESC LIMIT 1");
                            if ($sql2->num_rows > 0) {
                                while($fila = $sql2->fetch_assoc()) {
                                    $id = $fila["id"];
                                }
                                $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2,dato3) VALUES ('$id','$dato1periodico1',$dato2periodico1,$dato3periodico1)");
                                $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2,dato3) VALUES ('$id','$dato1periodico2',$dato2periodico2,$dato3periodico2)");
                                $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2,dato3) VALUES ('$id','$dato1periodico3',$dato2periodico3,$dato3periodico3)");
                            }
                            // header("Location: index.php");
                            // echo '<div class = "alert alert-success">Se ha ingresado correctamente la gráfica</div>';
                            echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                                echo '<div class="modal-dialog">';
                                    echo '<div class="modal-content">';
                                        echo '<div class="modal-header">';
                                            echo '<h5 class="Mensaje" id="exampleModalLabel">Éxito!</h5>';
                                            echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                                        echo '</div>';
                                        echo '<div class="modal-body">';
                                            echo '<p>Se ha ingresado exitosamente la gráfica!.</p>';
                                        echo '</div>';
                                        echo '<div class="modal-footer">';
                                            echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            echo '<script>';
                                echo 'document.addEventListener("DOMContentLoaded", function() {';
                                echo 'var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));';
                                echo 'myModal.show();';
                                echo '});';
                            echo '</script>';}
                        else{
                            echo '<div class = "alert alert-danger">Algó salió mal!</div>';
                            header("Location: ../vista/index.php");}
                }
                else if(!empty($_POST["columna1"]) and !empty($_POST["columna2"])){
                        $columna1 = $_POST["columna1"];$columna2 = $_POST["columna2"];
                        $dato1periodico1 = $_POST["dato1periodico1"];$dato1periodico2 = $_POST["dato1periodico2"];$dato1periodico3 = $_POST["dato1periodico3"];
                        $dato2periodico1 = $_POST["dato2periodico1"];$dato2periodico2 = $_POST["dato2periodico2"];$dato2periodico3 = $_POST["dato2periodico3"];
                        $sql = $conexion -> query("INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2) 
                        VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2')");
                        if($sql==1){
                            $sql2 = $conexion -> query("SELECT id from grafica ORDER BY id DESC LIMIT 1");
                            if ($sql2->num_rows > 0) {
                                while($fila = $sql2->fetch_assoc()) {
                                    $id = $fila["id"];
                                }
                                $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2) VALUES ('$id','$dato1periodico1',$dato2periodico1)");
                                $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2) VALUES ('$id','$dato1periodico2',$dato2periodico2)");
                                $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2) VALUES ('$id','$dato1periodico3',$dato2periodico3)");
                            }
                            // header("Location: index.php");
                            // echo '<div class = "alert alert-success text-center">Se ha ingresado correctamente la gráfica</div>';
                            echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                                echo '<div class="modal-dialog">';
                                    echo '<div class="modal-content">';
                                        echo '<div class="modal-header">';
                                            echo '<h5 class="Mensaje" id="exampleModalLabel">Éxito!</h5>';
                                            echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                                        echo '</div>';
                                        echo '<div class="modal-body">';
                                            echo '<p>Se ha ingresado exitosamente la gráfica!.</p>';
                                        echo '</div>';
                                        echo '<div class="modal-footer">';
                                            echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            echo '<script>';
                                echo 'document.addEventListener("DOMContentLoaded", function() {';
                                echo 'var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));';
                                echo 'myModal.show();';
                                echo '});';
                            echo '</script>';}
                        else{
                            echo '<div class = "alert alert-danger">Algó salió mal!</div>';
                            header("Location: ../vista/index.php");}
                }
                else if(!empty($_POST["columna1"])){
                        $columna1 = $_POST["columna1"];
                        $dato1periodico1 = $_POST["dato1periodico1"];$dato1periodico2 = $_POST["dato1periodico2"];$dato1periodico3 = $_POST["dato1periodico3"];
                        $sql = $conexion -> query("INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1) 
                        VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1')");
                        if($sql==1){
                            $sql2 = $conexion -> query("SELECT id from grafica ORDER BY id DESC LIMIT 1");
                            if ($sql2->num_rows > 0) {
                                while($fila = $sql2->fetch_assoc()) {
                                    $id = $fila["id"];
                                }
                                $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1) VALUES ('$id','$dato1periodico1')");
                                $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1) VALUES ('$id','$dato1periodico2')");
                                $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1) VALUES ('$id','$dato1periodico3')");
                            }
                            // echo '<div class = "alert alert-success text-center">Se ha ingresado correctamente la gráfica</div>';
                            // header("Location: index.php");
                            echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                                echo '<div class="modal-dialog">';
                                    echo '<div class="modal-content">';
                                        echo '<div class="modal-header">';
                                            echo '<h5 class="Mensaje" id="exampleModalLabel">Éxito!</h5>';
                                            echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                                        echo '</div>';
                                        echo '<div class="modal-body">';
                                            echo '<p>Se ha ingresado exitosamente la gráfica!.</p>';
                                        echo '</div>';
                                        echo '<div class="modal-footer">';
                                            echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            echo '<script>';
                                echo 'document.addEventListener("DOMContentLoaded", function() {';
                                echo 'var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));';
                                echo 'myModal.show();';
                                echo '});';
                            echo '</script>';}
                        else{
                            echo '<div class = "alert alert-danger">Algó salió mal!</div>';
                            header("Location: ../vista/index.php");}
                }
        }
        else{
            // header("Location: index.php");
            echo '<div class="alert alert-warning">Alguno de los campos está vacío!</div>';
        }?>

        <script>
            history.replaceState(null,null, location.pathname)
        </script>
<?php
    }
?>