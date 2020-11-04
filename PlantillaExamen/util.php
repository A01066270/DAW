<?php

function conectar() {
    $host="localhost";
    $name="root";
    $pass="";
    $dbname="BaseDatos";

    $conexion_bd = mysqli_connect($host,$name,$pass,$dbname);
    if (!$conexion_bd){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    return $conexion_bd;
}

function desconectar($conexion_bd) {
    mysqli_close($conexion_bd);
}

function agregar_paciente($sexo,$nombre, $telefono, $rfc, $email, $fechaNacimiento, $emailFacturas, $razonSocial, $direccion, $codigoPostal){
    $conexion_bd = conectar();
    
    $id = rand(20000,29999);
    $sexo = $_POST["sexo"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $rfc = $_POST["rfc"];
    $email = $_POST["email"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $emailFacturas = $_POST["emailFactura"];
    $razonsocial =$_POST["razonsocial"];
    $direccion = $_POST["direccion"];
    $codigoPostal = $_POST["codigoPostal"];
        
    $insertarPaciente = "INSERT INTO Paciente (idPaciente, sexo, nombre, fechanacimiento, telefono, rfc, email, emailFacturas, razonsocial, direccion, codigopostal) 
    VALUES ($id, $sexo,'".$nombre."', '".$fechaNacimiento."', ".$telefono.", '".$rfc."', '".$email."', '".$emailFacturas."', '".$razonsocial."', '".$direccion."', $codigoPostal)";
        
    var_dump($insertarPaciente);
    $ejecutarInsertar = mysqli_query($conexion_bd,$insertarPaciente);
        
        
    if (!$ejecutarInsertar){
        echo "Error en consulta sql.";
        $insertarPaciente -> error;
    }else{
        ?>
    <script type=text/javascript>
            
    alert('Registro completado');
    </script><?php
    }
}

function busqueda_pacientes($nombre) {

    $conexion_bd = conectar();
    $consulta = "SELECT * FROM Paciente WHERE nombre LIKE '%".$_POST['buscaNombre']."%'"; 
    var_dump($ejecutarConsulta);
    $ejecutarConsulta = mysqli_query($conexion_bd, $consulta);
    $verRegistros = mysqli_num_rows($ejecutarConsulta);
    $registro = mysqli_fetch_array($ejecutarConsulta);
    if(!$ejecutarConsulta){
        echo"Error en la consulta";
    }else{
        if($verRegistros<1){
            echo"<tr><td>Sin registros</td></tr>";
        }else{
            for($i=0; $i<=$verFilas; $i++){
				echo'
				    <tr>
				    <td>'.$registro[1].'</td>
				    <td>'.$registro[3].'</td>
				    <a href="dashboard.php"><td></td></a>
				    </tr>
				';
                    $registro = mysqli_fetch_array($ejecutarConsulta);
                }
            }
        }
    
    return $resultado;
}

?>
