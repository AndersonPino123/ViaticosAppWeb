<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Legalization Viatics</title>
  <link rel="stylesheet" href="../CSS/Estilos_formularios.css">
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
          <li><a href="Registrar_legalizaciones.php">Crear compra manual</a></li>
          <li><a href="../../controller/cerrarSesion.php">Cerrar sesion</a></li>
        </ul>
      </div>

    </header>
  </div>
  <div class="space">
    <div class="content">
      <form action="../model/operacion_guardar_legalizacion.php" method="POST">
        <p>
          <label><b>Id Legalizacion</b></label>
          <input type="text" name="id_legalizacion" placeholder="Ingrese el ID de la legalizacion">
        </p>
        <p>
          <label><b>Id Empleado</b></label>
          <input type="text" name="id_empleado" placeholder="Ingrese el ID del empleado">
        </p>
        <p>
          <label><b>Id Viaje</b></label>
          <input type="text" name="id_viaje" placeholder="Ingrese el ID del Viaje">
        </p>
        <p>
          <label><b>Tipo Viatico</b></label>
          <input type="text" name="Cod_viatico" placeholder="Ingrese el codigo del tipo de viatico">
        </p>
        <p>
          <label><b>Nombre del Establecimiento</b></label>
          <input type="text" name="Nom_establecimiento" placeholder="Ingrese el nombre del establecimiento">
        </p>
        <div class="content2">
          <p>
            <label><b>NIT Establecimiento</b></label>
            <input type="text" name="Nit_establecimiento" placeholder="Ingrese el NIT del establecimiento">
          </p>
          <p>
            <label><b>Valor</b></label>
            <input type="text" name="Monto" placeholder="Ingrese el Monto del viatico">
          </p>
          <p>
            <label><b>Fecha</b></label>
            <input type="text" name="Fecha" placeholder="Ingrese la Fecha de legalizacion ej: YYYY-MM-DD">
          </p>
          <p>
            <label><b>Codigo Estado Legalización</b></label>
            <input type="text" name="C_legalizacion" placeholder="Ingrese el codigo de estado de la Legalización">
          </p>
        </div>
        <div class="content3">
          <p>
            <label><b><br>Observaciones</b></label>
            <textarea type="text" name="Observaciones" placeholder="Ingrese una observación"></textarea>
          </p>
        </div>
        <p>
          <button type="submit" value="registrar">Registrar</button>
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
</body>

</html>