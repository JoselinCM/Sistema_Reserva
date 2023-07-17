<?php

    include_once("../config/conexion.php");
    $id = $_POST['idR'];
    $estado = $_POST['estadoN'];
    $user = $_POST['user'];

    $sql = "UPDATE reserva SET 
                    estado_id_estado='".$estado."' WHERE idr =".$id."";

    if ($resultado = $conexion->query($sql)) {
        echo "holaaaa-";
        $etd = mysqli_query($conexion, "SELECT estado_id_estado FROM reserva WHERE idr = '$id'");
        $resp = mysqli_fetch_array($etd);
        $e = $resp['estado_id_estado'];
        echo $e;

        if($e == "3"){

            $puntos = mysqli_query($conexion, "SELECT puntos FROM usuario WHERE id = '$user'");
            $valores = mysqli_fetch_array($puntos);
            $punto = $valores['puntos'];
            echo "puntos:".$punto;
            $puntoTotal= $punto + 20;
            echo "puntosTotal:".$puntoTotal;
            $actualizar = mysqli_query($conexion, "UPDATE usuario SET puntos = '$puntoTotal' WHERE id = '$user'");
            $puntos = mysqli_query($conexion, "SELECT puntos FROM usuario WHERE id = '$user'");
            $valor = mysqli_fetch_array($puntos);
            $p = $valor['puntos'];
            echo "puntos1:".$p;
            header("location: ../reserva.php");
        }else{
           header("location: ../reserva.php");
        }
    }
