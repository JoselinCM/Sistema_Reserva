<?php
  require ('../config/conexion.php');
  if(ISSET($_POST['buscar'])){
    $date1 = date("Y-m-d", strtotime($_POST['date1']));
    $date2 = date("Y-m-d", strtotime($_POST['date2']));
    $query=mysqli_query($conexion, "SELECT * FROM reserva WHERE fechar BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
    $row=mysqli_num_rows($query);
    if($row>0){
      while($fetch=mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $cont; $cont++; ?></td>
    <td><?php echo $resultado['nombres']; ?></td>
    <td><?php echo $resultado['cantidad']; ?></td>
    <td><?php echo $resultado['fechar']; ?></td>
    <td><?php echo $resultado['tipo']; ?></td>
    <td><?php echo $resultado['hora']; ?></td>
    <td><?php echo $resultado['nestado']; ?>&nbsp; &nbsp; &nbsp;<a href="actualizarEstado.php?id=<?php echo $resultado['idr']?>&estado=<?php echo $resultado['nestado'];?>" class="btn btn-primary"><i class="fas fa-marker"></i></a></td>
    <td>
        <a href="detallesReserva.php?id=<?php echo $resultado['idr']?>" class="btn btn-primary"><i class="fas fa-list"></i></a>
        <a href="https://api.whatsapp.com/send?phone=51<?php echo $resultado['numero']?>&text=Buen%20día%20, <?php echo $resultado['nombres']?>%20<?php echo $resultado['apellidos'] ?>%20tienes
%20una%20reserva%20el%20día%20de%20hoy%20<?php echo $resultado['hora']?>" class="btn btn-success"><i class="fas fa-share"></i></a>
    </td>
</tr>
    
<?php
      }
    }else{
      echo'
      <tr>
        <td colspan = "4"><center>Registros no Existen</center></td>
      </tr>';
    }
  }else{
    $query=mysqli_query($conn, "SELECT * FROM reserva") or die(mysqli_error());
    while($fetch=mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $cont; $cont++; ?></td>
    <td><?php echo $resultado['nombres']; ?></td>
    <td><?php echo $resultado['cantidad']; ?></td>
    <td><?php echo $resultado['fechar']; ?></td>
    <td><?php echo $resultado['tipo']; ?></td>
    <td><?php echo $resultado['hora']; ?></td>
    <td><?php echo $resultado['nestado']; ?>&nbsp; &nbsp; &nbsp;<a href="actualizarEstado.php?id=<?php echo $resultado['idr']?>&estado=<?php echo $resultado['nestado'];?>" class="btn btn-primary"><i class="fas fa-marker"></i></a></td>
    <td>
        <a href="detallesReserva.php?id=<?php echo $resultado['idr']?>" class="btn btn-primary"><i class="fas fa-list"></i></a>
        <a href="https://api.whatsapp.com/send?phone=51<?php echo $resultado['numero']?>&text=Buen%20día%20, <?php echo $resultado['nombres']?>%20<?php echo $resultado['apellidos'] ?>%20tienes
%20una%20reserva%20el%20día%20de%20hoy%20<?php echo $resultado['hora']?>" class="btn btn-success"><i class="fas fa-share"></i></a>
    </td>
</tr>
<?php
    }
  }
?>