<?php

include ("../config/conexion.php");

$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO mesa(cantidad) VALUES ('$cantidad')";

$resultado = mysqli_query($conexion, $sql);


if ($resultado == TRUE) {
    header("location:../stockMesa.php");
} else {
    echo "Datos NO insertados";
}


?>