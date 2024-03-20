<?php
session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1) {
  /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
  header('location: ../../index.php');
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Legalization Viatics</title>
  <link rel="stylesheet" href="../../CSS/index.css">
  <link rel="stylesheet" href="../../CSS/Estilos_generales.css">
</head>

<body>
  <!--Contenedor responsive-->
  <div class="contenedor">
    <!--Logo, Navbar-->
    <header>
      <div class="conta_1"></div>
      <a href="../../index.php"><img src="../../IMG/Cotizacion.svg" alt="Logo" class="img_logo"></a>
      <div class="menu">
        <ul class="nav">
        <li><a href="../Registrar_Empleado.php">Registrar Empleado</a>
        </li>
        <li><a href="../Opciones_empleado.php">Opciones Empleado</a>
        </li>
        <li><a href="../Crear_viaje.php">Crear Viaje</a>
        </li>
        <li><a href="../Revisar_legalizaciones.php">Revisar Legalizaciones</a></li>
        <li><a href="../../controller/cerrarSesion.php">Cerrar sesion</a></li>
        </ul>
      </div>
    </header>
  </div>
  <div class="space">
    <img src="../../IMG/viaticos.png" alt="" class="img_viaticos">
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
            <a href=""><img src="../../IMG/facebook.svg"></a>
            <a href=""><img src="../../IMG/linkedin.svg"></a>
            <a href=""><img src="../../IMG/gorjeo.svg"></a>
            <a href=""><img src="../../IMG/youtube.svg"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-footer">
      <div class="copyright">
        <img src="../../IMG/Cotizacion.svg">
        <label>© 2020 Legalization Viatics. Todos los derechos reservados.</label>
      </div>
    </div>
  </footer>
</body>

</html>