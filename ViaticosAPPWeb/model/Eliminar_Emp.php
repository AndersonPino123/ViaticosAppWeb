<?php
  include ('conexion.php');
  $connection = new Conexion;
  $connection->conectar();
  $id=$_REQUEST['Id'];
  $query="DELETE FROM empleados WHERE ID_Empleado = '$id'";
  $resultQuery = $connection->query($query);

  if($resultQuery){
    $connection->conectar();
    $id=$_REQUEST['Id'];
    $query="DELETE FROM usuarios WHERE id = '$id'";
    $resultQuery = $connection->query($query);
    header("Location: ../view/Opciones_empleado.php");
  }
  else{
    header("Location: ../view/admin/index.php");
  }

?>