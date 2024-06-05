<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../../login.php");
    }
    require '../database/conexion.php';

    // Verificar si el registro existe antes de modificar
    $id = $conexion -> real_escape_string($_POST['id']);
    $check_sql = "SELECT COUNT(*) as count FROM grafica WHERE id = $id";
    $result = $conexion->query($check_sql);
    $row = $result->fetch_assoc();
    $count = $row['count'];
    if ($count > 0) {
        if(!empty($_POST["categoria"]) and !empty($_POST["descripcion"]) and (!empty($_POST["rango"])
                and !empty($_POST["etiquetaY"]) and !empty($_POST["etiquetaX"]) and $_POST["rango"] >0))
            {   
                $mes = $conexion -> real_escape_string($_POST["mes"]);
                $año = $conexion -> real_escape_string($_POST["año"]);
                $categoria = $conexion -> real_escape_string($_POST["categoria"]);
                $descripcion = $conexion -> real_escape_string($_POST["descripcion"]);
                $rango = $conexion -> real_escape_string($_POST["rango"]);
                $etiquetaY = $conexion -> real_escape_string($_POST["etiquetaY"]);
                $etiquetaX = $conexion -> real_escape_string($_POST["etiquetaX"]);
                $tipo = $conexion -> real_escape_string($_POST["grafico"]);
                if((isset($_POST["columna1"]) && $_POST["columna1"] !=="") 
                && (isset($_POST["columna2"]) && $_POST["columna2"] !=="")
                && (isset($_POST["columna3"]) && $_POST["columna3"] !=="")
                && (isset($_POST["columna4"]) && $_POST["columna4"] !=="")
                && (isset($_POST["columna5"]) && $_POST["columna5"] !=="")
                && (isset($_POST["columna6"]) && $_POST["columna6"] !=="")
                && (isset($_POST["columna7"]) && $_POST["columna7"] !=="")
                )
                    {
                        $columna1 = $conexion -> real_escape_string($_POST["columna1"]);
                        $columna2 = $conexion -> real_escape_string($_POST["columna2"]);
                        $columna3 = $conexion -> real_escape_string($_POST["columna3"]);
                        $columna4 = $conexion -> real_escape_string($_POST["columna4"]);
                        $columna5 = $conexion -> real_escape_string($_POST["columna5"]);
                        $columna6 = $conexion -> real_escape_string($_POST["columna6"]);
                        $columna7 = $conexion -> real_escape_string($_POST["columna7"]);
                        $dato1periodico1 = $conexion -> real_escape_string($_POST["dato1periodico1"]);$dato1periodico2 = $conexion -> real_escape_string($_POST["dato1periodico2"]);$dato1periodico3 = $conexion -> real_escape_string($_POST["dato1periodico3"]);
                        $dato2periodico1 = $conexion -> real_escape_string($_POST["dato2periodico1"]);$dato2periodico2 = $conexion -> real_escape_string($_POST["dato2periodico2"]);$dato2periodico3 = $conexion -> real_escape_string($_POST["dato2periodico3"]);
                        $dato3periodico1 = $conexion -> real_escape_string($_POST["dato3periodico1"]);$dato3periodico2 = $conexion -> real_escape_string($_POST["dato3periodico2"]);$dato3periodico3 = $conexion -> real_escape_string($_POST["dato3periodico3"]);
                        $dato4periodico1 = $conexion -> real_escape_string($_POST["dato4periodico1"]);$dato4periodico2 = $conexion -> real_escape_string($_POST["dato4periodico2"]);$dato4periodico3 = $conexion -> real_escape_string($_POST["dato4periodico3"]);
                        $dato5periodico1 = $conexion -> real_escape_string($_POST["dato5periodico1"]);$dato5periodico2 = $conexion -> real_escape_string($_POST["dato5periodico2"]);$dato5periodico3 = $conexion -> real_escape_string($_POST["dato5periodico3"]);
                        $dato6periodico1 = $conexion -> real_escape_string($_POST["dato6periodico1"]);$dato6periodico2 = $conexion -> real_escape_string($_POST["dato6periodico2"]);$dato6periodico3 = $conexion -> real_escape_string($_POST["dato6periodico3"]);
                        $dato7periodico1 = $conexion -> real_escape_string($_POST["dato7periodico1"]);$dato7periodico2 = $conexion -> real_escape_string($_POST["dato7periodico2"]);$dato7periodico3 = $conexion -> real_escape_string($_POST["dato7periodico3"]);
                        $sql = "UPDATE grafica SET mes = '$mes', año = '$año', categoria = '$categoria', descripcion = '$descripcion', rango = '$rango', etiquetaY = '$etiquetaY', 
                        tituloX = '$etiquetaX', tipo = '$tipo', columna1 = '$columna1', columna2 = '$columna2', columna3 = '$columna3', columna4 = '$columna4', columna5 = '$columna5', columna6 = '$columna6', columna7 = '$columna7' WHERE id ='$id'";
                        if($conexion -> query($sql)){
                            // $id = $conexion -> insert_id;
                            $consulta1 = $conexion -> query("UPDATE periodico1 SET dato1 = '$dato1periodico1', dato2 = '$dato2periodico1',dato3 = '$dato3periodico1',dato4 = '$dato4periodico1',dato5 = '$dato5periodico1', dato6 = '$dato6periodico1', dato7 = '$dato7periodico1' WHERE grafica_id = $id");
                            $consulta2 = $conexion -> query("UPDATE periodico2 SET dato1 = '$dato1periodico2', dato2 = '$dato2periodico2',dato3 = '$dato3periodico2',dato4 = '$dato4periodico2',dato5 = '$dato5periodico2', dato6 = '$dato6periodico2', dato7 = '$dato7periodico2' WHERE grafica_id = $id");
                            $consulta3 = $conexion -> query("UPDATE periodico3 SET dato1 = '$dato1periodico3', dato2 = '$dato2periodico3',dato3 = '$dato3periodico3',dato4 = '$dato4periodico3',dato5 = '$dato5periodico3', dato6 = '$dato6periodico3', dato7 = '$dato7periodico3' WHERE grafica_id = $id");
                            $_SESSION['msg'] .= "Se ha actualizado correctamente la gráfica.";
                            $_SESSION['color'] = "success";
                        }
                    }
                else if((isset($_POST["columna1"]) && $_POST["columna1"] !=="") 
                && (isset($_POST["columna2"]) && $_POST["columna2"] !=="")
                && (isset($_POST["columna3"]) && $_POST["columna3"] !=="")
                && (isset($_POST["columna4"]) && $_POST["columna4"] !=="")
                && (isset($_POST["columna5"]) && $_POST["columna5"] !=="")
                && (isset($_POST["columna6"]) && $_POST["columna6"] !==""))
                    {
                        $columna1 = $conexion -> real_escape_string($_POST["columna1"]);
                        $columna2 = $conexion -> real_escape_string($_POST["columna2"]);
                        $columna3 = $conexion -> real_escape_string($_POST["columna3"]);
                        $columna4 = $conexion -> real_escape_string($_POST["columna4"]);
                        $columna5 = $conexion -> real_escape_string($_POST["columna5"]);
                        $columna6 = $conexion -> real_escape_string($_POST["columna6"]);
                        $dato1periodico1 = $conexion -> real_escape_string($_POST["dato1periodico1"]);$dato1periodico2 = $conexion -> real_escape_string($_POST["dato1periodico2"]);$dato1periodico3 = $conexion -> real_escape_string($_POST["dato1periodico3"]);
                        $dato2periodico1 = $conexion -> real_escape_string($_POST["dato2periodico1"]);$dato2periodico2 = $conexion -> real_escape_string($_POST["dato2periodico2"]);$dato2periodico3 = $conexion -> real_escape_string($_POST["dato2periodico3"]);
                        $dato3periodico1 = $conexion -> real_escape_string($_POST["dato3periodico1"]);$dato3periodico2 = $conexion -> real_escape_string($_POST["dato3periodico2"]);$dato3periodico3 = $conexion -> real_escape_string($_POST["dato3periodico3"]);
                        $dato4periodico1 = $conexion -> real_escape_string($_POST["dato4periodico1"]);$dato4periodico2 = $conexion -> real_escape_string($_POST["dato4periodico2"]);$dato4periodico3 = $conexion -> real_escape_string($_POST["dato4periodico3"]);
                        $dato5periodico1 = $conexion -> real_escape_string($_POST["dato5periodico1"]);$dato5periodico2 = $conexion -> real_escape_string($_POST["dato5periodico2"]);$dato5periodico3 = $conexion -> real_escape_string($_POST["dato5periodico3"]);
                        $dato6periodico1 = $conexion -> real_escape_string($_POST["dato6periodico1"]);$dato6periodico2 = $conexion -> real_escape_string($_POST["dato6periodico2"]);$dato6periodico3 = $conexion -> real_escape_string($_POST["dato6periodico3"]);
                        $sql = "UPDATE grafica SET mes = '$mes', año = '$año', categoria = '$categoria', descripcion = '$descripcion', rango = '$rango', etiquetaY = '$etiquetaY', 
                        tituloX = '$etiquetaX', tipo = '$tipo', columna1 = '$columna1', columna2 = '$columna2', columna3 = '$columna3', columna4 = '$columna4', columna5 = '$columna5', columna6 = '$columna6' WHERE id ='$id'";
                        if($conexion -> query($sql)){
                            // $id = $conexion -> insert_id;
                            $consulta1 = $conexion -> query("UPDATE periodico1 SET dato1 = '$dato1periodico1', dato2 = '$dato2periodico1',dato3 = '$dato3periodico1',dato4 = '$dato4periodico1',dato5 = '$dato5periodico1', dato6 = '$dato6periodico1' WHERE grafica_id = $id");
                            $consulta2 = $conexion -> query("UPDATE periodico2 SET dato1 = '$dato1periodico2', dato2 = '$dato2periodico2',dato3 = '$dato3periodico2',dato4 = '$dato4periodico2',dato5 = '$dato5periodico2', dato6 = '$dato6periodico2' WHERE grafica_id = $id");
                            $consulta3 = $conexion -> query("UPDATE periodico3 SET dato1 = '$dato1periodico3', dato2 = '$dato2periodico3',dato3 = '$dato3periodico3',dato4 = '$dato4periodico3',dato5 = '$dato5periodico3', dato6 = '$dato6periodico3' WHERE grafica_id = $id");
                            $_SESSION['msg'] .= "Se ha actualizado correctamente la gráfica.";
                            $_SESSION['color'] = "success";
                        }
                    }
                else if((isset($_POST["columna1"]) && $_POST["columna1"] !=="") 
                && (isset($_POST["columna2"]) && $_POST["columna2"] !=="")
                && (isset($_POST["columna3"]) && $_POST["columna3"] !=="")
                && (isset($_POST["columna4"]) && $_POST["columna4"] !=="")
                && (isset($_POST["columna5"]) && $_POST["columna5"] !==""))
                    {
                        $columna1 = $conexion -> real_escape_string($_POST["columna1"]);
                        $columna2 = $conexion -> real_escape_string($_POST["columna2"]);
                        $columna3 = $conexion -> real_escape_string($_POST["columna3"]);
                        $columna4 = $conexion -> real_escape_string($_POST["columna4"]);
                        $columna5 = $conexion -> real_escape_string($_POST["columna5"]);
                        $dato1periodico1 = $conexion -> real_escape_string($_POST["dato1periodico1"]);$dato1periodico2 = $conexion -> real_escape_string($_POST["dato1periodico2"]);$dato1periodico3 = $conexion -> real_escape_string($_POST["dato1periodico3"]);
                        $dato2periodico1 = $conexion -> real_escape_string($_POST["dato2periodico1"]);$dato2periodico2 = $conexion -> real_escape_string($_POST["dato2periodico2"]);$dato2periodico3 = $conexion -> real_escape_string($_POST["dato2periodico3"]);
                        $dato3periodico1 = $conexion -> real_escape_string($_POST["dato3periodico1"]);$dato3periodico2 = $conexion -> real_escape_string($_POST["dato3periodico2"]);$dato3periodico3 = $conexion -> real_escape_string($_POST["dato3periodico3"]);
                        $dato4periodico1 = $conexion -> real_escape_string($_POST["dato4periodico1"]);$dato4periodico2 = $conexion -> real_escape_string($_POST["dato4periodico2"]);$dato4periodico3 = $conexion -> real_escape_string($_POST["dato4periodico3"]);
                        $dato5periodico1 = $conexion -> real_escape_string($_POST["dato5periodico1"]);$dato5periodico2 = $conexion -> real_escape_string($_POST["dato5periodico2"]);$dato5periodico3 = $conexion -> real_escape_string($_POST["dato5periodico3"]);
                        $sql = "UPDATE grafica SET mes = '$mes', año = '$año', categoria = '$categoria', descripcion = '$descripcion', rango = '$rango', etiquetaY = '$etiquetaY', 
                        tituloX = '$etiquetaX', tipo = '$tipo', columna1 = '$columna1', columna2 = '$columna2', columna3 = '$columna3', columna4 = '$columna4', columna5 = '$columna5' WHERE id ='$id'";
                        if($conexion -> query($sql)){
                            // $id = $conexion -> insert_id;
                            $consulta1 = $conexion -> query("UPDATE periodico1 SET dato1 = '$dato1periodico1', dato2 = '$dato2periodico1',dato3 = '$dato3periodico1',dato4 = '$dato4periodico1',dato5 = '$dato5periodico1' WHERE grafica_id = $id");
                            $consulta2 = $conexion -> query("UPDATE periodico2 SET dato1 = '$dato1periodico2', dato2 = '$dato2periodico2',dato3 = '$dato3periodico2',dato4 = '$dato4periodico2',dato5 = '$dato5periodico2' WHERE grafica_id = $id");
                            $consulta3 = $conexion -> query("UPDATE periodico3 SET dato1 = '$dato1periodico3', dato2 = '$dato2periodico3',dato3 = '$dato3periodico3',dato4 = '$dato4periodico3',dato5 = '$dato5periodico3' WHERE grafica_id = $id");
                            $_SESSION['msg'] .= "Se ha actualizado correctamente la gráfica.";
                            $_SESSION['color'] = "success";
                        }
                    }
                    else if((isset($_POST["columna1"]) && $_POST["columna1"] !=="") 
                        && (isset($_POST["columna2"]) && $_POST["columna2"] !=="")
                        && (isset($_POST["columna3"]) && $_POST["columna3"] !=="")
                        && (isset($_POST["columna4"]) && $_POST["columna4"] !==""))
                    {
                        $columna1 = $conexion -> real_escape_string($_POST["columna1"]);
                        $columna2 = $conexion -> real_escape_string($_POST["columna2"]);
                        $columna3 = $conexion -> real_escape_string($_POST["columna3"]);
                        $columna4 = $conexion -> real_escape_string($_POST["columna4"]);
                        $dato1periodico1 = $conexion -> real_escape_string($_POST["dato1periodico1"]);$dato1periodico2 = $conexion -> real_escape_string($_POST["dato1periodico2"]);$dato1periodico3 = $conexion -> real_escape_string($_POST["dato1periodico3"]);
                        $dato2periodico1 = $conexion -> real_escape_string($_POST["dato2periodico1"]);$dato2periodico2 = $conexion -> real_escape_string($_POST["dato2periodico2"]);$dato2periodico3 = $conexion -> real_escape_string($_POST["dato2periodico3"]);
                        $dato3periodico1 = $conexion -> real_escape_string($_POST["dato3periodico1"]);$dato3periodico2 = $conexion -> real_escape_string($_POST["dato3periodico2"]);$dato3periodico3 = $conexion -> real_escape_string($_POST["dato3periodico3"]);
                        $dato4periodico1 = $conexion -> real_escape_string($_POST["dato4periodico1"]);$dato4periodico2 = $conexion -> real_escape_string($_POST["dato4periodico2"]);$dato4periodico3 = $conexion -> real_escape_string($_POST["dato4periodico3"]);
                        $sql = "UPDATE grafica SET mes = '$mes', año = '$año', categoria = '$categoria', descripcion = '$descripcion', rango = '$rango', etiquetaY = '$etiquetaY', 
                        tituloX = '$etiquetaX', tipo = '$tipo', columna1 = '$columna1', columna2 = '$columna2', columna3 = '$columna3', columna4 = '$columna4' WHERE id ='$id'";
                        if($conexion -> query($sql)){
                            // $id = $conexion -> insert_id;
                            $consulta1 = $conexion -> query("UPDATE periodico1 SET dato1 = '$dato1periodico1', dato2 = '$dato2periodico1',dato3 = '$dato3periodico1',dato4 = '$dato4periodico1' WHERE grafica_id = $id");
                            $consulta2 = $conexion -> query("UPDATE periodico2 SET dato1 = '$dato1periodico2', dato2 = '$dato2periodico2',dato3 = '$dato3periodico2',dato4 = '$dato4periodico2' WHERE grafica_id = $id");
                            $consulta3 = $conexion -> query("UPDATE periodico3 SET dato1 = '$dato1periodico3', dato2 = '$dato2periodico3',dato3 = '$dato3periodico3',dato4 = '$dato4periodico3' WHERE grafica_id = $id");
                            $_SESSION['msg'] .= "Se ha actualizado correctamente la grafica.";
                            $_SESSION['color'] = "success";
                        }
                    }
                    else if((isset($_POST["columna1"]) && $_POST["columna1"] !=="") 
                        && (isset($_POST["columna2"]) && $_POST["columna2"] !=="")
                        && (isset($_POST["columna3"]) && $_POST["columna3"] !==""))
                    {
                        $columna1 = $conexion -> real_escape_string($_POST["columna1"]);
                        $columna2 = $conexion -> real_escape_string($_POST["columna2"]);
                        $columna3 = $conexion -> real_escape_string($_POST["columna3"]);
                        $dato1periodico1 = $conexion -> real_escape_string($_POST["dato1periodico1"]);
                        $dato1periodico2 = $conexion -> real_escape_string($_POST["dato1periodico2"]);
                        $dato1periodico3 = $conexion -> real_escape_string($_POST["dato1periodico3"]);
                        $dato2periodico1 = $conexion -> real_escape_string($_POST["dato2periodico1"]);
                        $dato2periodico2 = $conexion -> real_escape_string($_POST["dato2periodico2"]);
                        $dato2periodico3 = $conexion -> real_escape_string($_POST["dato2periodico3"]);
                        $dato3periodico1 = $conexion -> real_escape_string($_POST["dato3periodico1"]);
                        $dato3periodico2 = $conexion -> real_escape_string($_POST["dato3periodico2"]);
                        $dato3periodico3 = $conexion -> real_escape_string($_POST["dato3periodico3"]);
                        $sql = "UPDATE grafica SET mes = '$mes', año = '$año', categoria = '$categoria', descripcion = '$descripcion', rango = '$rango', etiquetaY = '$etiquetaY', 
                        tituloX = '$etiquetaX', tipo = '$tipo', columna1 = '$columna1', columna2 = '$columna2', columna3 = '$columna3' WHERE id ='$id'";
                        if($conexion -> query($sql)){
                            // $id = $conexion -> insert_id;
                            $consulta1 = $conexion -> query("UPDATE periodico1 SET dato1 = '$dato1periodico1', dato2 = '$dato2periodico1',dato3 = '$dato3periodico1' WHERE grafica_id = $id");
                            $consulta2 = $conexion -> query("UPDATE periodico2 SET dato1 = '$dato1periodico2', dato2 = '$dato2periodico2',dato3 = '$dato3periodico2' WHERE grafica_id = $id");
                            $consulta3 = $conexion -> query("UPDATE periodico3 SET dato1 = '$dato1periodico3', dato2 = '$dato2periodico3',dato3 = '$dato3periodico3' WHERE grafica_id = $id");
                            $_SESSION['msg'] .= "Se ha actualizado correctamente la grafica.";
                            $_SESSION['color'] = "success";
                        }
                    }
                    else if((isset($_POST["columna1"]) && $_POST["columna1"] !=="") && (isset($_POST["columna2"]) && $_POST["columna2"] !==""))
                    {
                        $columna1 = $conexion -> real_escape_string($_POST["columna1"]);
                        $columna2 = $conexion -> real_escape_string($_POST["columna2"]);
                        $dato1periodico1 = $conexion -> real_escape_string($_POST["dato1periodico1"]);
                        $dato1periodico2 = $conexion -> real_escape_string($_POST["dato1periodico2"]);
                        $dato1periodico3 = $conexion -> real_escape_string($_POST["dato1periodico3"]);

                        $dato2periodico1 = $conexion -> real_escape_string($_POST["dato2periodico1"]);
                        $dato2periodico2 = $conexion -> real_escape_string($_POST["dato2periodico2"]);
                        $dato2periodico3 = $conexion -> real_escape_string($_POST["dato2periodico3"]);
                        $sql = "UPDATE grafica SET mes = '$mes', año = '$año', categoria = '$categoria', descripcion = '$descripcion', rango = '$rango', etiquetaY = '$etiquetaY', 
                        tituloX = '$etiquetaX', tipo = '$tipo', columna1 = '$columna1', columna2 = '$columna2' WHERE id ='$id'";
                        if($conexion -> query($sql)){
                            // $id = $conexion -> insert_id;
                            $consulta1 = $conexion -> query("UPDATE periodico1 SET dato1 = '$dato1periodico1', dato2 = '$dato2periodico1' WHERE grafica_id = $id");
                            $consulta2 = $conexion -> query("UPDATE periodico2 SET dato1 = '$dato1periodico2', dato2 = '$dato2periodico2' WHERE grafica_id = $id");
                            $consulta3 = $conexion -> query("UPDATE periodico3 SET dato1 = '$dato1periodico3', dato2 = '$dato2periodico3' WHERE grafica_id = $id");
                            $_SESSION['msg'] .= "Se ha actualizado correctamente la gráfica.";
                            $_SESSION['color'] = "success"; 
                        }
                    }
                    else if(isset($_POST["columna1"]) && $_POST["columna1"] !=="")
                    {
                        $columna1 = $conexion -> real_escape_string($_POST["columna1"]);
                        $dato1periodico1 = $conexion -> real_escape_string($_POST["dato1periodico1"]);
                        $dato1periodico2 = $conexion -> real_escape_string($_POST["dato1periodico2"]);
                        $dato1periodico3 = $conexion -> real_escape_string($_POST["dato1periodico3"]);
                        $sql = "UPDATE grafica SET mes = '$mes', año = '$año', categoria = '$categoria', descripcion = '$descripcion', rango = '$rango', etiquetaY = '$etiquetaY', 
                        tituloX = '$etiquetaX', tipo = '$tipo', columna1 = '$columna1' WHERE id ='$id'";
                        if($conexion -> query($sql)){
                            // $id = $conexion ->insert_id;
                            $consulta1 = $conexion -> query("UPDATE periodico1 SET dato1 = $dato1periodico1 WHERE grafica_id = $id");
                            $consulta2 = $conexion -> query("UPDATE periodico2 SET dato1 = $dato1periodico2 WHERE grafica_id = $id");
                            $consulta3 = $conexion -> query("UPDATE periodico3 SET dato1 = $dato1periodico3 WHERE grafica_id = $id");
                            $_SESSION['msg'] .= "Se ha actualizado correctamente la gráfica.";
                            $_SESSION['color'] = "success";
                        }
                    }
            }
        else
            {
                $_SESSION['msg'] = "No se ha actualizado correctamente la grafica.";
                $_SESSION['color'] = "danger";
            } 
    }
    else{
        $_SESSION['msg'] = "El registro no existe";
        $_SESSION['color'] = "warning";
    }

    header('Location: ../vista/index.php');
?>