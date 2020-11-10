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
        <input type="text" class="login-input" name="estadocovidrr" placeholder="Estudiante..." required><br><br>
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

    <div >
    <h5>El paciente...</h5>
   
    <table class='select_questions' >
        <tr>
            <td><p>Tiene problemas de Presión?</p></td>
            <td>
            <input type="radio" name="ppresion" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="ppresion" value="0"> 
                <label for="0" style="color:gray" >No</label><br></dr>
        </tr>
        <tr>
            <td><label>Fuma</label></td>
            <td><input type="radio" name="fuma" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="fuma" value="0"> 
                <label for="0" style="color:gray" >No</label><br></td>
        </tr>
        <tr>
            <td><label>Toma alcohol</label></td>
            <td><input type="radio" name="alcohol" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="alcohol" value="0"> 
                <label for="0" style="color:gray" >No</label><br></td>
        </tr>
        <tr>r
            <td><label>Consume drogas</label></td>
            <td><input type="radio" name="drogas" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="drogas" value="0"> 
                <label for="0" style="color:gray" >No</label><br></td>
        </tr>
        <tr>
            <td><label>Tatuajes</label></td>
            <td><input type="radio" name="tatuaje" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="tatuaje" value="0"> 
                <label for="0" style="color:gray" >No</label><br></td>
        </tr>
        <tr>
            <td><label>Problemas Renales</label></td>
            <td><input type="radio" name="proren" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="proren" value="0"> 
                <label for="0" style="color:gray" >No</label><br></td>
        </tr>
        <tr>
            <td><label>Diabetes</label></td>
            <td><input type="radio" name="diabetes" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="diabetes" value="0"> 
                <label for="0" style="color:gray" >No</label><br></td>
        </tr>
        <tr>
            <td><label>Hepatitis</label></td>
            <td><input type="radio" name="hepatitis" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="hepatitis" value="0"> 
                <label for="0" style="color:gray" >No</label><br></td>
        </td>
        <tr>
            <td><label>Artritis</label></td>
            <td><input type="radio" name="artritis" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="artritis" value="0"> 
                <label for="0" style="color:gray" >No</label><br></td>
        </tr>

        <tr>
            <td><label>Enfermedad Sanguinea</label></td>
            <td><input type="radio" name="enfesang" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="enfesang" value="0"> 
                <label for="0" style="color:gray">No</label><br></td>
        </tr>

        <tr>
            <td><label>Enfermedad Sistema Nervioso</label></td>
            <td><input type="radio" name="enfesist" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="enfesist" value="0"> 
                <label for="0" style="color:gray">No</label><br></td>
        </tr>
        <tr>
            <td>
                <label>Enfermedad Respiratoria</label>
            </td>
            <td>
                <input type="radio" name="enferesp" value="1"> 
            <label for="1" style="color:gray">Si  </label>
            <input type="radio" name="enferesp" value="0"> 
            <label for="0" style="color:gray">No</label>
    
        <label style="color:gray"> Cual?</label><br>
            <input type="text" class="login-input" name="cualenferesp" placeholder="Asma, bronquitis, etc...">
            </td>
        </tr>
        
            <br>
        <tr>
            <td>
                 <label>Alergia</label>
            </td>
            <td>
                 <input type="radio" name="alergia" value="1"> 
            <label for="1" style="color:gray">Si  </label>
        <input type="radio" name="alergia" value="0"> 
        <label for="0" style="color:gray">No</label>
    
    <label style="color:gray"> Cual?</label><br>    
        <input type="text" class="login-input" name="cualalergia" placeholder="Cacahuate, gatos, etc..."><br>

            </td>

        </tr>
    <br>
        <tr>
            <td><label>Cancer</label></td>
            <td><input type="radio" name="cancer" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="cancer" value="0"> 
                <label for="0" style="color:gray">No</label><br></td>
        </tr>

        <tr>
            <td><label>Cirgía reciente</label></td>
            <td><input type="radio" name="cirugmed" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="cirugmed" value="0"> 
                <label for="0" style="color:gray">No</label><br></td>
        </tr>
        <tr>
            <td><label>Tomado medicamento en los ultimos 2 meses</label></td>
            <td><input type="radio" name="medicado" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="medicado" value="0"> 
                <label for="0" style="color:gray">No</label><br></td>
        </tr>
        <tr>
            <td><label>Tomado anticonceptivos en los ultimos 2 meses</label></td>
            <td><input type="radio" name="anticoncept" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="anticoncepts" value="0"> 
                <label for="0" style="color:gray">No</label><br></td>
        </tr>
        <tr>
            <td><label>Estado Embarazada</label></td>
            <td><input type="radio" name="embarazo" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="embarazo" value="0"> 
                <label for="0" style="color:gray">No</label><br></td>
        </tr>
        <tr>
            <td><label>Enfermedades de Transmisión Sexual</label></td>
            <td><input type="radio" name="ETS" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="ETS" value="0"> 
                <label for="0" style="color:gray">No</label><br></td>
        </tr>
        <tr>
            <td><label>Ha viajado en las ultimas 2 semanas</label></td>
            <td><input type="radio" name="viaje" value="1"> 
                <label for="1" style="color:gray">Si  </label>
                <input type="radio" name="viaje" value="0"> 
                <label for="0" style="color:gray">No</label><br></td>
        </tr>
    </table>
    <input type="text" placeholder="Extras" name='Extras' class="login-input" style='width:100%;'><br>
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
    $ppresion = $_POST["ppresion"];
    $fuma = $_POST["fuma"];
    $alcohol = $_POST["alcohol"];
    $drogas = $_POST["drogsa"];
    $tatuaje = $_POST["tatuaje"];
    $proren = $_POST["proren"];
    $diabetes = $_POST["diabetes"];
    $hepoatitis = $_POST["hepatitis"];
    $artritis = $_POST["artritis"];
    $enfesang = $_POST["enfesang"];
    $enfesist = $_POST["enfesist"];
    $enferesp = $_POST["enferesp"];
    $cualenferesp = $_POST["cualenferesp"];
    $alergia = $_POST["alergia"];
    $cualalergia = $_POST["cualalergia"];
    $cancer = $_POST["cancer"];
    $cirugmed = $_POST["cirugmed"];
    $medicado = $_POST["medicado"];
    $anticoncepts = $_POST["anticoncepts"];
    $embarazo = $_POST["embarazo"];
    $ETS = $_POST["ETS"];
    $viaje = $_POST["viaje"];
    $Extras = $_POST["Extras"];
    
    $insertarPaciente = "INSERT INTO Paciente (idPaciente, nombre, sexo, fechanacimiento, email, telefono, emailFacturas, razonsocial, direccion, codigopostal, ocupacion, estadocivil, estadocovid, rfc, EnferResp, CualEnferResp, Presion, Alergias, CualAlergias, fumador, alcohol, drogas, tatuajes, ProbRenales, Diabetes, Hepatitis, Artritis, EnfSanguinea, EnfSisNev, Cancer, CirugMedica, Medicado, Anticoncepts, Embarazo, ATS, ViajoCiudad,Extras) 
    VALUES ($id,'".$nombre."', $sexo, '".$fechaNacimiento."', '".$email."', ".$telefono.", '".$emailFacturas."','".$razonsocial."', '".$direccion."', ".$codigoPostal.", '"$ocupacion"', '".$rfc."',  )";
    
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