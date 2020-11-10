<?php
require('db.php');
include('../html/previous-content.html');
include('../html/_busqueda_rapida.html');
include('_ver_pacientes.php');
include('../html/post-content.html');

      
    if(isset($_POST['submit'])){
      echo busqueda();
    }


?>