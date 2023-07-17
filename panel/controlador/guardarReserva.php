<?php

include ("../config/conexion.php");

$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$tipo = $_POST['tipo'];
$hora = $_POST['hora'];
$comentario = $_POST['comentario'];
$estado = "1";
$usuario = $_POST['usuario'];

$sql = "INSERT INTO reserva(cantidad, fechar, tipo, hora, comentario, estado_id_estado, usuario_idu) VALUES ('$cantidad','$fecha','$tipo','$hora','$comentario', '$estado', '$usuario')";
$resultado = mysqli_query($conexion, $sql);

//
if ($resultado === TRUE) {
    header("location:../listar-reserva.php");
} else {
    echo "Datos NO insertados";
}


?>
