<?php
include('conexion.php');
$connection = new Conexion;

$id_legalizacion = $_POST['id_legalizacion'];
$id_empleado = $_POST['id_empleado'];
$id_viaje = $_POST['id_viaje'];
$Cod_viatico = $_POST['Cod_viatico'];
$Nom_establecimiento = $_POST['Nom_establecimiento'];
$Nit_establecimiento = $_POST['Nit_establecimiento'];
$Monto = $_POST['Monto'];
$Fecha = $_POST['Fecha'];
$C_legalizacion = $_POST['C_legalizacion'];
$Observaciones = $_POST['Observaciones'];
$id_emp = 0;

if (
  !empty($id_legalizacion) and !empty($id_empleado) and !empty($id_viaje) and !empty($Cod_viatico) and !empty($Nom_establecimiento)
  and !empty($Nit_establecimiento) and !empty($Monto) and !empty($Fecha) and !empty($C_legalizacion)
  and !empty($Observaciones)
) {
  $connection->conectar();
  //inserta la información en la tabla viajes
  $query = "INSERT INTO legalizaciones(ID_Legalizacion,Empleados_ID_Empleado,Viajes_ID_Viajes,Tipos_Viaticos_Cod_Viatico,
                                      Nom_Establecimiento,NIT_Establecimiento,Monto,Fecha,Estados_Cod_Estado,Observaciones)
            VALUES('$id_legalizacion','$id_empleado','$id_viaje','$Cod_viatico','$Nom_establecimiento','$Nit_establecimiento',
                    '$Monto','$Fecha','$C_legalizacion','$Observaciones')";
  $resultQuery = $connection->query($query);

  header('location: ../view/user/index.php');
}else{
  header('location: ../view/Registrar_legalizaciones.php');
}
