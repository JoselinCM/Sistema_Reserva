<?php 
include ("../config/conexion.php");
    guardarpuntos($dni){
        
        print_r($dni);
        $sql= "INSERT INTO puntaje(puntos, dni) VALUES (10,'$dni')";
        $resultado = mysqli_query($conexion,$sql);
        if ($resultado == TRUE) {
            echo "se guardo correctamente";
        } else {
            echo "no se registro";
        }
 }