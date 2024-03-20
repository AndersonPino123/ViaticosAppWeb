<?php
include('conexion.php');
$connection = new Conexion;

$connection->conectar();
$id = $_REQUEST['Id'];
$Cod_Estado = $_POST['Cod_Estado'];
$Observaciones = $_POST['Observaciones'];

$query = "UPDATE viajes SET 
  Cod_Estado='$Cod_Estado',
  Observaciones='$Observaciones'
 WHERE ID_Viajes = '$id'";
$resultQuery = $connection->query($query);

if ($resultQuery) {
  header("Location: ../view/Revisar_legalizaciones.php");
} else {
  header("Location: ../view/admin/index.php");
}