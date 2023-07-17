<?php

    include_once("../config/conexion.php");
    
    $cantidad = $_POST['cantidad'];

    $sql = "UPDATE mesa SET cantidad='".$cantidad."' WHERE idm ='1'";

    if ($resultado = $conexion->query($sql)) {
        header("location: ../stockMesa.php");
    }
