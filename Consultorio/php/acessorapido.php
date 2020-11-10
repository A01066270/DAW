<?php
require('db.php');
include('../html/previous-content.html');
include('../html/_busqueda_rapida.html');
include('_ver_pacientes.php');
include('../html/post-content.html');

      
      if(isset($_POST['submit'])){
      
      $consulta = "SELECT nombre, telefono FROM Pacientes WHERE nombre LIKE '%".$_POST['buscar']."%' OR telefono Like '%".$_POST['buscar']."%'";       
      
      $ejecutarConsulta = mysqli_query($con, $consulta);
      $verFilas = mysqli_num_rows($ejecutarConsulta);
      $fila = mysqli_fetch_array($ejecutarConsulta);
      echo"<table class='resultado_busqueda' ><tr><td><em>Nombre</em></td><td><em>Número</em></td><td><em>Expediente</em></td></tr>";
      if(!$ejecutarConsulta){
          echo"Error en la consulta";
      }else{
          if($verFilas<1){
              echo"<tr><td>Sin registros</td></tr>";
          }else{
              for($i=0; $i<$verFilas; $i++){
              echo'
                  <tr>
                  <td>'.$fila[0].'</td>
                  <td>'.$fila[1].'</td>
                  <a href="dashboard.php"><td></td></a>
                  </tr>
              ';
                  $fila = mysqli_fetch_array($ejecutarConsulta);
              }
          }
      }}


?>