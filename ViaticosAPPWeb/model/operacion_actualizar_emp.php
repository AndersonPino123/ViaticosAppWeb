<?php
include('conexion.php');
$connection = new Conexion;

$connection->conectar();
$id = $_REQUEST['Id'];
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Cedula = $_POST['Cedula'];
$Cod_cargo = $_POST['Cod_cargo'];
$F_nacimiento = $_POST['F_nacimiento'];
$Direccion = $_POST['Direccion'];
$Celular = $_POST['Celular'];
$Email = $_POST['Email'];


$query = "UPDATE empleados SET 
  Cod_Cargo='$Cod_cargo',
  ID_Cedula='$Cedula',
  Nombres='$Nombres',
  Apellido='$Apellidos',
  Direccion_Residencia='$Direccion',
  Celular='$Celular',
  Fecha_Nacimiento='$F_nacimiento',
  Email='$Email'  WHERE ID_Empleado = '$id'";
$resultQuery = $connection->query($query);

if ($resultQuery) {
    $query = "UPDATE usuarios SET nombre ='$Nombres',email='$Email' WHERE id = '$id'";
    $resultQuery = $connection->query($query);
    header("Location: ../view/Opciones_empleado.php");
} else {
    header("Location: ../view/admin/index.php");
}
