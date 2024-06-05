<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../../login.php");
    }
    require '../database/conexion.php';
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
            && (isset($_POST["columna7"]) && $_POST["columna7"] !==""))
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
                    $sql = "INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2, columna3, columna4, columna5, columna6, columna7) 
                    VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2','$columna3','$columna4','$columna5', '$columna6', '$columna7')";
                    if($conexion -> query($sql)){
                        $id = $conexion -> insert_id;
                        $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2,dato3,dato4,dato5,dato6,dato7) VALUES ($id,$dato1periodico1,$dato2periodico1,$dato3periodico1,$dato4periodico1,$dato5periodico1,$dato6periodico1, $dato7periodico1)");
                        $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2,dato3,dato4,dato5,dato6,dato7) VALUES ($id,$dato1periodico2,$dato2periodico2,$dato3periodico2,$dato4periodico2,$dato5periodico2,$dato6periodico2, $dato7periodico2)");
                        $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2,dato3,dato4,dato5,dato6,dato7) VALUES ($id,$dato1periodico3,$dato2periodico3,$dato3periodico3,$dato4periodico3,$dato5periodico3,$dato6periodico3, $dato7periodico3)");
                        $_SESSION['msg'] .= "Se ha registrado correctamente la gráfica con 7 columnas.";
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
                    $sql = "INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2, columna3, columna4, columna5, columna6) 
                    VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2','$columna3','$columna4','$columna5', '$columna6')";
                    if($conexion -> query($sql)){
                        $id = $conexion -> insert_id;
                        $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2,dato3,dato4,dato5, dato6) VALUES ('$id','$dato1periodico1',$dato2periodico1,$dato3periodico1,$dato4periodico1,$dato5periodico1,$dato6periodico1)");
                        $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2,dato3,dato4,dato5, dato6) VALUES ('$id','$dato1periodico2',$dato2periodico2,$dato3periodico2,$dato4periodico2,$dato5periodico2,$dato6periodico2)");
                        $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2,dato3,dato4,dato5, dato6) VALUES ('$id','$dato1periodico3',$dato2periodico3,$dato3periodico3,$dato4periodico3,$dato5periodico3,$dato6periodico3)");
                        $_SESSION['msg'] .= "Se ha registrado correctamente la gráfica con 6 columnas";
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
                    $sql = "INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2, columna3, columna4, columna5) 
                    VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2','$columna3','$columna4','$columna5')";
                    if($conexion -> query($sql)){
                        $id = $conexion -> insert_id;
                        $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2,dato3,dato4,dato5) VALUES ('$id',$dato1periodico1,$dato2periodico1,$dato3periodico1,$dato4periodico1,$dato5periodico1)");
                        $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2,dato3,dato4,dato5) VALUES ('$id',$dato1periodico2,$dato2periodico2,$dato3periodico2,$dato4periodico2,$dato5periodico2)");
                        $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2,dato3,dato4,dato5) VALUES ('$id',$dato1periodico3,$dato2periodico3,$dato3periodico3,$dato4periodico3,$dato5periodico3)");
                        $_SESSION['msg'] .= "Se ha registrado correctamente la gráfica con 5 columnas";
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
                    $sql = "INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2, columna3, columna4) 
                    VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2','$columna3','$columna4')";
                    if($conexion -> query($sql)){
                        $id = $conexion -> insert_id;
                        $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2,dato3,dato4) VALUES ('$id','$dato1periodico1',$dato2periodico1,$dato3periodico1,$dato4periodico1)");
                        $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2,dato3,dato4) VALUES ('$id','$dato1periodico2',$dato2periodico2,$dato3periodico2,$dato4periodico2)");
                        $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2,dato3,dato4) VALUES ('$id','$dato1periodico3',$dato2periodico3,$dato3periodico3,$dato4periodico3)");
                        $_SESSION['msg'] .= "Se ha registrado correctamente la gráfica.";
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
                    $sql = "INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2, columna3) 
                    VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2','$columna3')";
                    if($conexion -> query($sql)){
                        $id = $conexion -> insert_id;
                        $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2,dato3) VALUES ('$id','$dato1periodico1',$dato2periodico1,$dato3periodico1)");
                        $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2,dato3) VALUES ('$id','$dato1periodico2',$dato2periodico2,$dato3periodico2)");
                        $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2,dato3) VALUES ('$id','$dato1periodico3',$dato2periodico3,$dato3periodico3)");
                        $_SESSION['msg'] .= "Se ha registrado correctamente la gráfica.";
                        $_SESSION['color'] = "success";
                    }
                }
                else if((isset($_POST["columna1"]) && $_POST["columna1"] !=="") 
                    && (isset($_POST["columna2"]) && $_POST["columna2"] !==""))
                {
                    $columna1 = $conexion -> real_escape_string($_POST["columna1"]);
                    $columna2 = $conexion -> real_escape_string($_POST["columna2"]);
                    $dato1periodico1 = $conexion -> real_escape_string($_POST["dato1periodico1"]);
                    $dato1periodico2 = $conexion -> real_escape_string($_POST["dato1periodico2"]);
                    $dato1periodico3 = $conexion -> real_escape_string($_POST["dato1periodico3"]);

                    $dato2periodico1 = $conexion -> real_escape_string($_POST["dato2periodico1"]);
                    $dato2periodico2 = $conexion -> real_escape_string($_POST["dato2periodico2"]);
                    $dato2periodico3 = $conexion -> real_escape_string($_POST["dato2periodico3"]);
                    $sql = "INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2) 
                    VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1','$columna2')";
                    if($conexion -> query($sql)){
                        $id = $conexion -> insert_id;
                        $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1,dato2) VALUES ('$id','$dato1periodico1',$dato2periodico1)");
                        $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1,dato2) VALUES ('$id','$dato1periodico2',$dato2periodico2)");
                        $consulta2 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1,dato2) VALUES ('$id','$dato1periodico3',$dato2periodico3)");
                        $_SESSION['msg'] .= "Se ha registrado correctamente la gráfica.";
                        $_SESSION['color'] = "success";
                    }
                }
                else if((isset($_POST["columna1"]) && $_POST["columna1"] !==""))
                {
                    $columna1 = $conexion -> real_escape_string($_POST["columna1"]);
                    $dato1periodico1 = $conexion -> real_escape_string($_POST["dato1periodico1"]);
                    $dato1periodico2 = $conexion -> real_escape_string($_POST["dato1periodico2"]);
                    $dato1periodico3 = $conexion -> real_escape_string($_POST["dato1periodico3"]);
                    $sql = "INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1) 
                    VALUES ('$mes',$año,'$categoria','$descripcion',$rango,'$etiquetaY','$etiquetaX','$tipo','$columna1')";
                    if($conexion -> query($sql)){
                        $id = $conexion -> insert_id;
                        $consulta1 = $conexion -> query("INSERT INTO periodico1 (grafica_id,dato1) VALUES ('$id','$dato1periodico1')");
                        $consulta2 = $conexion -> query("INSERT INTO periodico2 (grafica_id,dato1) VALUES ('$id','$dato1periodico2')");
                        $consulta3 = $conexion -> query("INSERT INTO periodico3 (grafica_id,dato1) VALUES ('$id','$dato1periodico3')");
                        $_SESSION['msg'] .= "Se ha registrado correctamente la gráfica.";
                        $_SESSION['color'] = "success";
                    }
                }
        }
    else
        {
            $_SESSION['msg'] = "No se ha registrado la gráfica.";
            $_SESSION['color'] = "danger";
        }   
    header('Location: ../vista/index.php');
?>