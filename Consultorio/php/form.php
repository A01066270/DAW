<?php
    require('db.php');
?>
<br>
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
<form method="POST" class="text-center">
    <div class="grid-2">
    <div>
    <h5>Datos personales del paciente</h5>
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
    <input type="text" class="login-input" name="fechaNacimiento" placeholder="Fecha de nacimiento(aaaa-mm-dd)*" required><br><br>
    <input type="text" class="login-input" type='email' name="email" placeholder="Correo electrónico*"required><br><br>
    <input type="text" class="login-input" name="emailFacturas" placeholder="Correo electrónico Facturas"><br><br>
    <input type="text" class="login-input" name="razonsocial" placeholder="Razon Social"><br><br>
    <input type="text" class="login-input" name="direccion" placeholder="Direccion*" required><br><br>
    <input type="text" class="login-input" name="codigoPostal" placeholder="Codigo Postal*" required>
    <br>
    </div>

    <div >
    <h5>El paciente...</h5>
   
    <table class="select_questions">
        <td>
            <tr><label>Problemas de Presión</label></tr>
            <tr><input type="radio" name="ppresion" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="ppresion" value="0"> 
    <label for="0" style="color:gray" >No</label><br></tr>
        </td>
        <td>
            <tr><label>Fuma</label></tr>
            <tr><input type="radio" name="fuma" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="fuma" value="0"> 
    <label for="0" style="color:gray" >No</label><br></tr>
        </td>
        <td>
            <tr><label>Toma alcohol</label></tr>
            <tr><input type="radio" name="alcohol" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="alcohol" value="0"> 
    <label for="0" style="color:gray" >No</label><br></tr>
        </td>
        <td>
            <tr><label>Consume drogas</label></tr>
            <tr><input type="radio" name="drogas" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="drogas" value="0"> 
    <label for="0" style="color:gray" >No</label><br></tr>
        </td>
        <td>
            <tr><label>Tatuajes</label></tr>
            <tr><input type="radio" name="tatuaje" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="tatuaje" value="0"> 
    <label for="0" style="color:gray" >No</label><br></tr>
        </td>
        <td>
            <tr><label>Problemas Renales</label></tr>
            <tr><input type="radio" name="proren" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="proren" value="0"> 
    <label for="0" style="color:gray" >No</label><br></tr>
        </td>
        <td>
            <tr><label>Diabetes</label></tr>
            <tr><input type="radio" name="diabetes" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="diabetes" value="0"> 
    <label for="0" style="color:gray" >No</label><br></tr>
        </td>
        <td>
            <tr><label>Hepatitis</label></tr>
            <tr><input type="radio" name="hepatitis" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="hepatitis" value="0"> 
    <label for="0" style="color:gray" >No</label><br></tr>
        </td>
        <td>
            <tr><label>Artritis</label></tr>
            <tr><input type="radio" name="artritis" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="artritis" value="0"> 
    <label for="0" style="color:gray" >No</label><br></tr>
        </td>

        <td>
            <tr><label>Enfermedad Sanguinea</label></tr>
            <tr><input type="radio" name="enfesang" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="enfesang" value="0"> 
    <label for="0" style="color:gray">No</label><br></tr>
        </td>

        <td>
            <tr><label>Enfermedad Sistema Nervioso</label></tr>
            <tr><input type="radio" name="enfesist" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="enfesist" value="0"> 
    <label for="0" style="color:gray">No</label><br></tr>
        </td>
        <label>Enfermedad Respiratoria</label>
    <input type="radio" name="enferesp" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="enferesp" value="0"> 
    <label for="0" style="color:gray">No</label>
    
    <label style="color:gray"> Cual?</label>
    <input type="text" class="login-input" name="cualenferesp" placeholder="Asma, bronquitis, etc..."><br>

    <br>

    <label>Alergia</label>
    <input type="radio" name="alergia" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="alergia" value="0"> 
    <label for="0" style="color:gray">No</label>
    
    <label style="color:gray"> Cual?</label>
    <input type="text" class="login-input" name="cualalergia" placeholder="Cacahuate, gatos, etc..."><br>


        <td>
            <tr><label>Cancer</label></tr>
            <tr><input type="radio" name="cancer" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="cancer" value="0"> 
    <label for="0" style="color:gray">No</label><br></tr>
        </td>

        <td>
            <tr><label>Cirgía reciente</label></tr>
            <tr><input type="radio" name="cirugmed" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="cirugmed" value="0"> 
    <label for="0" style="color:gray">No</label><br></tr>
        </td>
        <td>
            <tr><label>Tomado medicamento en los ultimos 2 meses</label></tr>
            <tr><input type="radio" name="medicado" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="medicado" value="0"> 
    <label for="0" style="color:gray">No</label><br></tr>
        </td>
        <td>
            <tr><label>Tomado anticonceptivos en los ultimos 2 meses</label></tr>
            <tr><input type="radio" name="anticoncept" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="anticoncepts" value="0"> 
    <label for="0" style="color:gray">No</label><br></tr>
        </td>
        <td>
            <tr><label>Estado Embarazada</label></tr>
            <tr><input type="radio" name="embarazo" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="embarazo" value="0"> 
    <label for="0" style="color:gray">No</label><br></tr>
        </td>
        <td>
            <tr><label>Enfermedades de Transmisión Sexual</label></tr>
            <tr><input type="radio" name="ETS" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="ETS" value="0"> 
    <label for="0" style="color:gray">No</label><br></tr>
        </td>
        <td>
            <tr><label>Ha viajado en las ultimas 2 semanas</label></tr>
            <tr><input type="radio" name="viaje" value="1"> 
    <label for="1" style="color:gray">Si  </label>
    <input type="radio" name="viaje" value="0"> 
    <label for="0" style="color:gray">No</label><br></tr>
        </td>
        <td>
            <tr>
            <input type="text" placeholder="Extras" class="login-input"><br></tr>
        </td>






    </table>
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
    <div class="alert alert-primary" role="alert">
        Registro exitoso.
    </div><?php
    }
    
}
?>