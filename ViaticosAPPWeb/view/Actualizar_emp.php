<?php
include ('../model/conexion.php');
$connection = new Conexion;

$id=$_REQUEST['Id'];
$connection->conectar();
$query="SELECT * FROM empleados WHERE ID_Empleado = '$id'";
$resultQuery = $connection->query($query);
$row = $resultQuery->fetch_assoc();
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Legalization Viatics</title>
  <link rel="stylesheet" href="../CSS/estilos_formularios.css">
  <link rel="stylesheet" href="../CSS/Estilos_generales.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
  <!--Contenedor responsive-->
  <div class="contenedor">
    <!--Logo, Navbar-->
    <header>
      <div class="conta_1"></div>
      <a href="../index.php"><img src="../IMG/Cotizacion.svg" alt="Logo" class="img_logo"></a>
      <div class="menu">
        <ul class="nav">
        <li><a href="Opciones_empleado.php">Opciones Empleado</a>
          </li>
          <li><a href="../controller/cerrarSesion.php">Cerrar sesion</a></li>
        </ul>
      </div>

    </header>
  </div>
<div class="space">
    <div class="content">
    <form action="../model/operacion_actualizar_emp.php?Id=<?php echo $row['ID_Empleado']; ?>" method="POST">
        <p>
          <label><b>Nombre</b></label>
          <input type="text" REQUIRED name="Nombres" placeholder="Ingrese sus nombres completos" value="<?php echo $row['Nombres']; ?>">
        </p>
        <p>
          <label><b>Apellido</b></label>
          <input type="text" REQUIRED name="Apellidos" placeholder="Ingrese sus apellidos completos" value="<?php echo $row['Apellido']; ?>">
        </p>
        <p>
          <label><b>Cedula</b></label>
          <input type="number" REQUIRED name="Cedula" placeholder="Ingrese Cedula" value="<?php echo $row['ID_Cedula']; ?>">
        </p>
        <p>
          <label><b>Codigo del Cargo</b></label>
          <input type="number" REQUIRED name="Cod_cargo" placeholder="Ingrese el codigo del cargo" value="<?php echo $row['Cod_Cargo']; ?>">
        </p>
        <p>
          <label><b>Fecha de Nacimiento</b></label>
          <input type="text" REQUIRED name="F_nacimiento" placeholder="Ingrese Fecha de Nacimiento ej: YYYY-MM-DD" value="<?php echo $row['Fecha_Nacimiento']; ?>">
        </p>
        <!-- </div> -->
        <div class="content2">
        <p>
          <label><b>Dirección</b></label>
          <input type="text" REQUIRED name="Direccion" placeholder="Ingrese Dirección" value="<?php echo $row['Direccion_Residencia']; ?>">
        </p>
        <p>
          <label><b>Celular</b></label>
          <input type="text" REQUIRED name="Celular" placeholder="Ingrese Celular" value="<?php echo $row['Celular']; ?>">
        </p>
        <p>
          <label><b>E-mail</b></label>
          <input type="text" REQUIRED  name="Email" placeholder="Ingrese E-mail" value="<?php echo $row['Email']; ?>">
        </p>
      </div>
          <p>
            <button type="submit" value="actualizar">Actualizar</button>
          </p>
      </form>
      </div>
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