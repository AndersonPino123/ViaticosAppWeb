<?php
include('../model/conexion.php');
$connection = new Conexion;

$id = $_REQUEST['Id'];
$connection->conectar();
$query = "SELECT * FROM legalizaciones WHERE ID_Legalizacion = '$id'";
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
    <form action="../model/operacion_actualizar_legalizacion.php?Id=<?php echo $row['ID_Legalizacion']; ?>" method="POST">
      <p>
        <label><b>Codigo de Estado</b></label>
        <input type="text" REQUIRED name="Estados_Cod" placeholder="Ingrese el nuevo codigo de Estado" value="<?php echo $row['Estados_Cod_Estado']; ?>">
      </p>
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