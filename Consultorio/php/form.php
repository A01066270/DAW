
<ul class="breadcrumb">
                <li><a href="dashboard.php">Inicio</a> </li> 
                <li><a href="dashboard_pacientes.php">Pacientes</a></li>
                <li>Registrar Pacientes</li>
            </ul>

<br>
<h1 class="login-title text-center">Registrar Paciente</h1>
<br>

    <label style="color:gray">Campos obligatorios*</label>
<br>
<hr>
<form method="POST" class="text-center" action="registrop.php">
    <div class="grid-2">
    <div class="select_questions">
    <h5 style='color:black;'>Datos personales del paciente</h5>
    <label>Nombre completo del Paciente*</label><br>
    <input type="text" class="login-input" name="nombre" placeholder="Nombre completo del paciente*" required >
    <br>
<br>
    <input type="radio" name="sexo" value="1"> 
    <label for="1" style="color:gray">Hombre  </label>
    <input type="radio" name="sexo" value="0"> 
    <label for="0" style="color:gray">Mujer</label>
<br>
<br>
    <label>Numero de telefono*</label><br>
        <input type="text" class="login-input" name="telefono" placeholder="Telefono*" required><br><br>
    <label>Ocupacion*</label><br>
        <input type="text" class="login-input" name="ocupacion" placeholder="Estudiante..." required><br><br>
    <label>Estado Civil*</label><br>
        <input type="text" class="login-input" name="estadocivil" placeholder="Estudiante..." required><br><br>
    <label>Estado COVID-19*</label><br>
        <input type="text" class="login-input" name="estadocovidr" placeholder="Estudiante..." required><br><br>
    <label>RFC</label><br>
        <input type="text" class="login-input" name="rfc" placeholder="JUAN19101998" ><br><br>
    <label>Fecha de nacimiento*</label><br>
        <input type="text" class="login-input" name="fechaNacimiento" placeholder="(aaaa-mm-dd)*" required><br><br>
    <label>Correo electronico*</label><br>
        <input type="text" class="login-input" type='email' name="email" placeholder="ejemplo@correo.com"required><br><br>
    <label>Correo electronico de facturacion</label><br>
        <input type="text" class="login-input" name="emailFacturas" placeholder="facturas@coreo.com"><br><br>
    <label>Razon Social</label><br>
        <input type="text" class="login-input" name="razonsocial" placeholder="..."><br><br>
    <label>Direccion*</label><br>
        <input type="text" class="login-input" name="direccion" placeholder="PSherman Calle Walabi 42,r Sydney" required><br><br>
    <label>Codigo Postal*</label><br>
        <input type="text" class="login-input" name="codigoPostal" placeholder="23456" required>
    <br>
    </div>
    </div>
    <hr>
    <br>
    <input type="submit" name="submit" value="Registrar" class="Registrar login-button ">
    <br>
    <br>
    
</form>

<?php
if(isset($_POST['submit'])){
    
    $id = rand(20000,29999);
    $sexo = $_POST["sexo"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $ocupacion = $_POST["ocupacion"];
    $rfc = $_POST["rfc"];
    $email = $_POST["email"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $emailFacturas = $_POST["emailFacturas"];
    $razonsocial =$_POST["razonsocial"];
    $direccion = $_POST["direccion"];
    $codigoPostal = $_POST["codigoPostal"];

    
    $insertarPaciente = "INSERT INTO Paciente (idPaciente, nombre, sexo, fechanacimiento, email, telefono, emailFacturas, razonsocial, direccion, codigopostal) 
    VALUES ($id,'".$nombre."', $sexo, '".$fechaNacimiento."', '".$email."', ".$telefono.", '".$emailFacturas."','".$razonsocial."', '".$direccion."', ".$codigoPostal." )";
    
    /*var_dump($insertarPaciente);*/
    $ejecutarInsertar = mysqli_query($con,$insertarPaciente);
    
    
    if (!$ejecutarInsertar){
        echo "Error en consulta sql.";
        $insertarPaciente -> error;
    }else{
        ?>
    <div class="alert alert-primary" role="alert">
        Registro exitoso.
    </div><?php
    }
    
}
?>