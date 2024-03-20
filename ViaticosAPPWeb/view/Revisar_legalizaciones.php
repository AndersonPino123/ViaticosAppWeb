<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Legalization Viatics</title>
  <link rel="stylesheet" href="../CSS/estilos_tablas.css">
  <link rel="stylesheet" href="../CSS/Estilos_generales.css">
</head>

<body>
  <!--Contenedor responsive-->
  <div class="contenedor">
  <!--Logo, Navbar-->
  <header>
  <div class="conta_1"></div>
    <a href="../index.php"><img src="../IMG/Cotizacion.svg" alt="Logo" class="img_logo"></a>
    <div class="menu">
      <ul class="nav">
      <li><a href="Registrar_Empleado.php">Registrar Empleado</a>
        </li>
        <li><a href="Opciones_empleado.php">Opciones Empleado</a>
        </li>
        <li><a href="Crear_viaje.php">Crear orden manual</a>
        </li>
        <li><a href="Revisar_legalizaciones.php">Revisar status orden</a></li>
        <li><a href="../controller/cerrarSesion.php">Cerrar sesion</a></li>
      </ul>
    </div>
    
  </header>  
  </div>
  <div class="space">
  <div class="label_table">
         <label><b>Viajes</b></label>
       </div>
    <table class="table"> <!--Tabla para visualizar los viajes-->
      <tbody>
        <tr>
          <td><b>Id Viaje</b></td>
          <td><b>Id Responsable</b></td>
          <td><b>Id Empleado</b></td>
          <td><b>Origen</b></td>
          <td><b>Destino</b></td>
          <td><b>Fecha Inicio</b></td>
          <td><b>Fecha Fin</b></td>
          <td><b>Tope Transporte</b></td>
          <td><b>Tope Diario</b></td>
          <td><b>Tope Adicional</b></td>
          <td><b>Codigo Estado</b></td>
          <td><b>Observaciones</b></td>
          <td colspan="1"><b>Opciones</b></td>
        </tr>
        <?php
        include("../model/conexion.php");
        $connection = new Conexion;
        $connection->conectar();
        $query = "SELECT * FROM viajes";
        $resultado = $connection->query($query);
        while ($row = $resultado->fetch_assoc()) {
        ?>
          <tr>
            <td><?php echo $row['ID_Viajes']; ?></td>
            <td><?php echo $row['ID_Responsable']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
            <td><?php echo $row['Origen']; ?></td>
            <td><?php echo $row['Destino']; ?></td>
            <td><?php echo $row['Fecha_Inicio']; ?></td>
            <td><?php echo $row['Fecha_Fin']; ?></td>
            <td><?php echo $row['Tope_Transporte']; ?></td>
            <td><?php echo $row['Tope_Diario']; ?></td>
            <td><?php echo $row['Tope_Adicional']; ?></td>
            <td><?php echo $row['Cod_Estado']; ?></td>
            <td><?php echo $row['Observaciones']; ?></td>
            <td><a href="Actualizar_viaje.php? Id=<?php echo $row['ID_Viajes']; ?>"><img src="../IMG/editar.svg"></a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
       <div class="label_table">
         <label><b>Legalizaciones</b></label>
       </div>  <!--Tabla para visualizar las legalizaciones-->
    <table class="table">
      <tbody>
        <tr>
          <td><b>Id Legalizacion</b></td>
          <td><b>Id Empleado</b></td>
          <td><b>Id Viaje</b></td>
          <td><b>Codigo Viatico</b></td>
          <td><b>Nombre Establecimiento</b></td>
          <td><b>Nit Establecimiento</b></td>
          <td><b>Monto</b></td>
          <td><b>Fecha</b></td>
          <td><b>Estado Legalización</b></td> 
          <td><b>Observaciones</b></td>
          <td colspan="1"><b>Opciones</b></td>
        </tr>
        <?php
        $connection->conectar();
        $query = "SELECT * FROM legalizaciones";
        $resultado = $connection->query($query);
        while ($row = $resultado->fetch_assoc()) {
        ?>
          <tr>
            <td><?php echo $row['ID_Legalizacion']; ?></td>
            <td><?php echo $row['Empleados_ID_Empleado']; ?></td>
            <td><?php echo $row['Viajes_ID_Viajes']; ?></td>
            <td><?php echo $row['Tipos_Viaticos_Cod_Viatico']; ?></td>
            <td><?php echo $row['Nom_Establecimiento']; ?></td>
            <td><?php echo $row['NIT_Establecimiento']; ?></td>
            <td><?php echo $row['Monto']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Estados_Cod_Estado']; ?></td>
            <td><?php echo $row['Observaciones']; ?></td>
            <td><a href="Actualizar_Legalizacion.php? Id=<?php echo $row['ID_Legalizacion']; ?>"><img src="../IMG/editar.svg"></a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <!--Footer-->
  <footer>
    <div class="footer1"></div>
    <div class="container-footer-all">
      <div class="container-body">
        <div class="colum1">
          <h1>LEGAL</h1>
          <p>Términos de uso</p>
          <p>Acuerdo de licencia</p>
          <p>Política de privacidad</p>
          <p>Información de Copyright</p>
          <p>Política de cookies</p>
        </div>
        <div class="colum2">
          <h1>NUESTRAS REDES</h1>
          <div class="row2">
            <a href=""><img src="../IMG/facebook.svg"></a>
            <a href=""><img src="../IMG/linkedin.svg"></a>
            <a href=""><img src="../IMG/gorjeo.svg"></a>
            <a href=""><img src="../IMG/youtube.svg"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-footer">
      <div class="copyright">
        <img src="../IMG/Cotizacion.svg">
        <label>© 2020 Legalization Viatics. Todos los derechos reservados.</label>
      </div>
    </div>
  </footer>
    </body>
</html>