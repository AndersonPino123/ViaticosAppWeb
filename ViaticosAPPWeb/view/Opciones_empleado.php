<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Legalization Viatics</title>
  <link rel="stylesheet" href="../CSS/estilos_tablas.css">
  <link rel="stylesheet" href="../CSS/Estilos_generales.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
    <table class="table">
      <tbody>
        <tr>
          <td><b>ID</b></td>
          <td><b>Nombres</b></td>
          <td><b>Apellidos</b></td>
          <td><b>Cedula</b></td>
          <td><b>Cargo</b></td>
          <td><b>Celular</b></td>
          <td><b>Dirección</b></td>
          <td><b>Fecha de Nacimiento</b> </td>
          <td><b>E-mail</b></td>
          <td colspan="2"><b>Opciones</b></td>
        </tr>
        <?php
        include("../model/conexion.php");
        $connection = new Conexion;
        $connection->conectar();
        $query = "SELECT * FROM empleados WHERE Cod_Cargo != 3 ";
        $resultado = $connection->query($query);
        while ($row = $resultado->fetch_assoc()) {
        ?>
          <tr>
            <td><?php echo $row['ID_Empleado']; ?></td>
            <td><?php echo $row['Nombres']; ?></td>
            <td><?php echo $row['Apellido']; ?></td>
            <td><?php echo $row['ID_Cedula']; ?></td>
            <td><?php echo $row['Cod_Cargo']; ?></td>
            <td><?php echo $row['Celular']; ?></td>
            <td><?php echo $row['Direccion_Residencia']; ?></td>
            <td><?php echo $row['Fecha_Nacimiento']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><a href="Actualizar_emp.php? Id=<?php echo $row['ID_Empleado']; ?>"><img src="../IMG/editar.svg"></a></td>
            <td><a href="../model/Eliminar_Emp.php? Id=<?php echo $row['ID_Empleado']; ?>"><img src="../IMG/eliminar.svg"></a></td>
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
  <script src="../JS/functions.js"></script>
  <script src="../JS/bootstrap.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>