<?php
    require('db.php');
?>
<br>
<h1 class="login-title text-center">Registrar Paciente</h1>
<br>

    <label style="color:gray">Campos obligatorios*</label>
<br>
<hr>
<form method="POST" class="text-center">
    <input type="text" class="login-input" name="nombre" placeholder="Nombre completo del paciente*" required >
    <br>
<br>
    <input type="radio" name="sexo" value="1"> 
    <label for="1" style="color:gray">Hombre  </label>
    <input type="radio" name="sexo" value="0"> 
    <label for="0" style="color:gray">Mujer</label>
<br>
<br>
    <input type="text" class="login-input" name="telefono" placeholder="Telefono*" required><br><br>
    <input type="text" class="login-input" name="rfc" placeholder="RFC*" required><br><br>
    <input type="datetime" class="login-input" name="fechaNacimiento" placeholder="Fecha de nacimiento(aaaa-mm-dd)*" required><br><br>
    <input type="text" class="login-input" type='email' name="email" placeholder="Correo electrónico*"required><br><br>
    <input type="text" class="login-input" name="emailFacturas" placeholder="Correo electrónico Facturas"><br><br>
    <input type="text" class="login-input" name="razonsocial" placeholder="Razon Social"><br><br>
    <input type="text" class="login-input" name="direccion" placeholder="Direccion*" required><br><br>
    <input type="text" class="login-input" name="codigoPostal" placeholder="Codigo Postal*" required>
    <br>
    <hr>
    <br>
    <input type="submit" name="submit" value="Registrar" class="Registrar login-button ">

</form>

<?php
if(isset($_POST['submit'])){
    
    $id = rand(20000,29999);
    $sexo = $_POST["sexo"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $rfc = $_POST["rfc"];
    $email = $_POST["email"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $emailFacturas = $_POST["emailFacturas"];
    $razonsocial =$_POST["razonsocial"];
    $direccion = $_POST["direccion"];
    $codigoPostal = $_POST["codigoPostal"];
    
    $insertarPaciente = "INSERT INTO Paciente (idPaciente, sexo, nombre, fechanacimiento, telefono, rfc, email, emailFacturas, razonsocial, direccion, codigopostal) 
    VALUES ($id, $sexo,'".$nombre."', '".$fechaNacimiento."', ".$telefono.", '".$rfc."', '".$email."', '".$emailFacturas."', '".$razonsocial."', '".$direccion."', $codigoPostal)";
    
    /*var_dump($insertarPaciente);*/
    $ejecutarInsertar = mysqli_query($con,$insertarPaciente);
    
    
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
?>