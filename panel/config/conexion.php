<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "reserva";

$conexion =  new mysqli($host,$user,$pass,$db);

if(!$conexion){
  echo "Conexion fallida";
}

?>