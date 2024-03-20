<?php
  include ('conexion.php');
  $connection = new Conexion;

  $Nombre=$_POST['Nombres'];
  $Apellido=$_POST['Apellidos'];
  $Identificacion = $_POST ['Cedula'];
  $Cargo = $_POST ['Cod_cargo'];
  $Nacimiento = $_POST ['F_nacimiento'];
  $Dir = $_POST ['Direccion'];
  $Cel = $_POST ['Celular'];
  $Correo = $_POST ['Email'];
  $Pass = $_POST ['Contrasena'];
  $id_emp = 0;
  $aux_cargo = 0;

  if(!empty($Nombre) and !empty($Apellido) and !empty($Identificacion) and !empty($Cargo) and !empty($Nacimiento) 
      and !empty($Dir) and !empty($Cel) and !empty($Correo) and !empty($Pass))
      {
        $connection->conectar();
        $query = "SELECT MAX(ID_Empleado) AS ID from empleados";
        $resultQuery = $connection->query($query);
        $row = mysqli_fetch_array($resultQuery);
        $id_emp = $row['ID'] + 1;

        //inserta la información en la tabla empleados
        $query = "INSERT INTO empleados(ID_Empleado,Cod_Cargo,ID_Cedula,Nombres,Apellido,Direccion_Residencia,Celular,
                                        Fecha_Nacimiento,Email,Clave)
                                VALUES('$id_emp','$Cargo','$Identificacion','$Nombre','$Apellido','$Dir','$Cel','$Nacimiento','$Correo','$Pass')";
        $resultQuery = $connection->query($query);

        //Insertar datos para el inicio de sesión
        // $cargo_usuario = 2;
        $query = "INSERT INTO usuarios(id,nombre,email,clave,cargo) VALUES ('$id_emp','$Nombre','$Correo','$Pass','$Cargo')";
        $resultQuery = $connection->query($query);
        
        header('location: ../view/admin/index.php');
      }
  
?>