<?php

include_once("globals.php");

function conectar(){

  $ENV = $GLOBALS["env"];

  if ($ENV == "RICARDO") {
    $con = mysqli_connect("localhost","ricardo","","Consultorio");
  } elseif ($ENV == "DEV") {
    $con = mysqli_connect("localhost","test","","Consultorio");
  }elseif ($ENV == "FER") {
    $con = mysqli_connect("localhost","fer","micontra","RPacientes");
  }

  // Checar conexion
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $con -> set_charset("utf8");

  return $con;
}

function desconectar($con){
  mysqli_close($con);
}

function busqueda(){
  $consulta = "SELECT nombre, telefono FROM Pacientes WHERE nombre LIKE '%".$_POST['buscar']."%' OR telefono Like '%".$_POST['buscar']."%'";       
  $con = conectar();
  $ejecutarConsulta = $con->query($consulta);
  $verFilas = mysqli_num_rows($ejecutarConsulta);
  $fila = mysqli_fetch_array($ejecutarConsulta);
  $resultado = "<table class='resultado_busqueda' ><tr><td><em>Nombre</em></td><td><em>Número</em></td><td><em>Expediente</em></td></tr>";
  if(!$ejecutarConsulta){
      echo"Error en la consulta";
  }else{
      if($verFilas<1){
        $resultado .="<tr><td>Sin registros</td></tr>";
      }else{
          for($i=0; $i<$verFilas; $i++){
            $resultado .='
              <tr>
              <td>'.$fila[0].'</td>
              <td>'.$fila[1].'</td>
              <a href="dashboard.php"><td></td></a>
              </tr>
          ';
              $fila = mysqli_fetch_array($ejecutarConsulta);
          }
      }
  }
  desconectar($con);
  return $resultado;
}
?>
