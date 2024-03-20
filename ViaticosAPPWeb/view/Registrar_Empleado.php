<!-- <?php
      $Nombre = $_POST['Nombres'];
      echo $Nombre;
      ?> -->
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
    <div class="content">
    <form action="../model/operacion_guardar_usuario.php" method="POST">
        <p>
          <label><b>Nombre</b></label>
          <input type="text" name="Nombres" placeholder="Ingrese sus nombres completos">
        </p>
        <p>
          <label><b>Apellido</b></label>
          <input type="text" name="Apellidos" placeholder="Ingrese sus apellidos completos">
        </p>
        <p>
          <label><b>Cedula</b></label>
          <input type="number" name="Cedula" placeholder="Ingrese Cedula">
        </p>
        <p>
          <label><b>Codigo del Cargo</b></label>
          <input type="number" name="Cod_cargo" placeholder="Ingrese el codigo del cargo">
        </p>
        <p>
          <label><b>Fecha de Nacimiento</b></label>
          <input type="text" name="F_nacimiento" placeholder="Ingrese Fecha de Nacimiento ej: YYYY-MM-DD">
        </p>
        <!-- </div> -->
        <div class="content2">
          <br>
        <p>
          <label><b>Dirección</b></label>
          <input type="text" name="Direccion" placeholder="Ingrese Dirección">
        </p>
        <p>
          <label><b>Celular</b></label>
          <input type="text" name="Celular" placeholder="Ingrese Celular">
        </p>
        <p>
          <label><b>E-mail</b></label>
          <input type="text" name="Email" placeholder="Ingrese E-mail">
        </p>
        <p>
          <label><b>Contraseña</b></label>
          <input type="text" name="Contrasena" placeholder="Ingrese la contraseña">
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