<?php

    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $tipo = $_POST['tipo'];
    $hora = $_POST['hora'];
    $comentario = $_POST['comentario'];

    $sql = "UPDATE reserva SET 
                    cantidad='".$cantidad."',
                    fechar='".$fecha."',
                    tipo='".$tipo."',
                    hora='".$hora."',
                    comentario='".$comentario."' WHERE idr =".$id."";

    if ($resultado = $conexion->query($sql)) {
        header("location: ../listar-reserva.php");
    }
