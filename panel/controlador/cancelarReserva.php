<?php
    include ("../config/conexion.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM reserva WHERE idr ='$id'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("Location: ../listar-reserva.php");
    }

?>