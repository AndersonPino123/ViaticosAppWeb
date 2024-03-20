<?php
include('conexion.php');
$connection = new Conexion;

$id_viajes = $_POST['id_viajes'];
$id_responsable = $_POST['id_responsable'];
$id_empleado = $_POST['id_empleado'];
$Origen = $_POST['Origen'];
$Destino = $_POST['Destino'];
$F_inicio = $_POST['F_inicio'];
$F_fin = $_POST['F_fin'];
$V_transporte = $_POST['V_transporte'];
$V_diarios = $_POST['V_diarios'];
$V_adicionales = $_POST['V_adicionales'];
$C_legalizacion = $_POST['C_legalizacion'];
$Observaciones = $_POST['Observaciones'];
$id_emp = 0;

if (
  !empty($id_viajes) and !empty($id_responsable) and !empty($id_empleado) and !empty($Origen) and !empty($Destino)
  and !empty($F_inicio) and !empty($F_fin) and !empty($V_transporte) and !empty($V_diarios)
  and !empty($V_adicionales) and !empty($C_legalizacion and !empty($Observaciones))
) {
  $connection->conectar();

    //inserta la información en la tabla viajes
    $query = "INSERT INTO viajes(ID_Viajes,ID_Responsable,ID_Empleado,Origen,Destino,Fecha_Inicio,Fecha_Fin,Tope_Transporte,
                              Tope_Diario,Tope_Adicional,Cod_Estado,Observaciones)
          VALUES('$id_viajes','$id_responsable','$id_empleado','$Origen','$Destino','$F_inicio','$F_fin','$V_transporte',
                  '$V_diarios','$V_adicionales','$C_legalizacion','$Observaciones')";
    $resultQuery = $connection->query($query);

    header('location: ../view/Revisar_legalizaciones.php');
} else {
  header('location: ../view/Crear_viaje.php');
}
