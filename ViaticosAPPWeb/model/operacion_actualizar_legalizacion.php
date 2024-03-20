<?php
include('conexion.php');
$connection = new Conexion;

$connection->conectar();
$id = $_REQUEST['Id'];
$Estados_Cod = $_POST['Estados_Cod'];


$query = "UPDATE legalizaciones SET 
  Estados_Cod_Estado ='$Estados_Cod'
  WHERE ID_Legalizacion = '$id'";
$resultQuery = $connection->query($query);

if ($resultQuery) {
    header("Location: ../view/Revisar_legalizaciones.php");
} else {
    header("Location: ../view/admin/index.php");
}
