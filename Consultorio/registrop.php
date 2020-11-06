<?php
require('db.php');
include('previous-content.html');
include('form.php');
include('post-content.html');

// if(isset($_POST['submit'])){
//     $id = rand(20000,29999);
//     $sexo = $_POST["sexo"];
//     $nombre = $_POST["nombre"];
//     $telefono = $_POST["telefono"];
//     $rfc = $_POST["rfc"];
//     $email = $_POST["email"];
//     $fechaNacimiento = $_POST["fechaNacimiento"];
//     $emailFacturas = $_POST["emailFacturas"];
//     $razonsocial =$_POST["razonsocial"];
//     $direccion = $_POST["direccion"];
//     $codigoPostal = $_POST["codigoPostal"];
    
//     $insertarPaciente = "INSERT INTO Paciente (idPaciente, sexo, nombre, fechanacimiento, telefono, rfc, email, emailFacturas, razonsocial, direccion, codigopostal) 
//     VALUES ($id, $sexo,'".$nombre."', '".$fechaNacimiento."', ".$telefono.", '".$rfc."', '".$email."', '".$emailFacturas."', '".$razonsocial."', '".$direccion."', $codigoPostal)";
    
//     var_dump($insertarPaciente);
//     $ejecutarInsertar = mysqli_query($conexion_bd,$insertarPaciente);
    
    
//     if (!$ejecutarInsertar){
//         echo "Error en consulta sql.";
//         $insertarPaciente -> error;
//     }else{
//         ?>
     <!--<script type=text/javascript>
            
//     alert('Registro completado');
//     </script><?php
//     }
    
// }

?>