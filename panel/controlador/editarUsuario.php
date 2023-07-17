<?php

    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $fecha = $_POST['fecha'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "UPDATE usuario SET
                    nombres='".$nombres."', 
                    apellidos='".$apellidos."', 
                    numero='".$celular."', 
                    fecha='".$fecha."', 
                    email='".$email."', 
                    direccion='".$direccion."', 
                    password='".$password."' WHERE id =".$id."";

    if ($resultado = $conexion->query($sql)) {
        header("location: ../perfil-usuario.php");
    }
