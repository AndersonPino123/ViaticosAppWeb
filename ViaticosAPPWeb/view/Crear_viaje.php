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
      <form action="../model/operacion_guardar_viaje.php" method="POST">
        <p>
          <label><b>Id Viaje</b></label>
          <input type="text" name="id_viajes" placeholder="Ingrese el ID del viaje">
        </p>
        <p>
          <label><b>Id Responsable</b></label>
          <input type="text" name="id_responsable" placeholder="Ingrese el ID del jefe responsable">
        </p>
        <p>
          <label><b>Id Empleado</b></label>
          <input type="text" name="id_empleado" placeholder="Ingrese el ID del empleado">
        </p>
        <p>
          <label><b>Ciudad Origen</b></label>
          <input type="text" name="Origen" placeholder="Ingrese la ciudad de origen">
        </p>
        <p>
          <label><b>Ciudad Destino</b></label>
          <input type="text" name="Destino" placeholder="Ingrese la ciudad de destino">
        </p>
        <p>
          <label><b>Fecha inicio viaje</b></label>
          <input type="text" name="F_inicio" placeholder="Ingrese Fecha de inicio del viaje ej: YYYY-MM-DD">
        </p>
        <!-- </div> -->
        <div class="content2">
          <p>
            <label><b>Fecha fin viaje</b></label>
            <input type="text" name="F_fin" placeholder="Ingrese Fecha de fin del viaje ej: YYYY-MM-DD">
          </p>
          <p>
            <label><b>Viaticos Transporte</b></label>
            <input type="text" name="V_transporte" placeholder="Ingrese los viaticos de transporte">
          </p>
          <p>
            <label><b>Viaticos Diarios</b></label>
            <input type="text" name="V_diarios" placeholder="Ingrese los viaticos diarios">
          </p>
          <p>
            <label><b>Viaticos Adicionales</b></label>
            <input type="text" name="V_adicionales" placeholder="Ingrese los viaticos adicionales">
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