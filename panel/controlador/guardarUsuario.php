<?php

include ("../config/conexion.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fecha'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$estado = $_POST['estado'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO usuario(nombres, apellidos, dni, numero, fecha, email, direccion, password, puntos, estado_usuario, cargo_idc ) VALUES ('$nombres','$apellidos', '$dni','$celular','$fecha','$email', '$direccion', '$password', '10' , '$estado','$tipo')";

$verificar = mysqli_query($conexion, "SELECT * FROM usuario WHERE dni = '$dni'");
if(mysqli_num_rows($verificar) > 0){
    echo '<script>
            alert("Este documento de identidad ya se encuentra registrado, intento con otro");
            window.location = "../../index.php";
        </script>';
        exit();
}

$resultado = mysqli_query($conexion, $sql);


if ($resultado == TRUE) {
    header("location:../iniciar-sesion.php");
} else {
    echo "Datos NO insertados";
}


?>
