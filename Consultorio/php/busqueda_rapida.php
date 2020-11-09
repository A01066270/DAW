<br>
    
<ul class="breadcrumb">
                <li><a href="dashboard.php">Inicio</a> </li> 
                <li><a href="dashboard_pacientes.php">Pacientes</a></li>
                <li>Buscar Paciente</li>
            </ul>

<h1 class="text-center">Acceso Rápido</h1>
<div style="height: auto">
   <form method="post">
       <div class="grid-2">
           <div>
               <h3>Nombre</h3>
               <input name="buscaNombre" placeholder="Juan Perez Gonzalez"  type=text >
               
           </div>

           <div>
           <h3>Teléfono</h3>
               <input name="buscaNumero" placeholder="1234567890" type=text >
           </div>
       </div>
       <input id="Buscar" name="submit" class="submit" type="submit" value="Buscar" >
    </form>   

    
<div>
    <table class="resultado_busqueda" >
    <tr>
        <td><em>Nombre</em></td>
        <td><em>Número</em></td>
        <td><em>Expediente</em></td>
    </tr>
  <?php
        if(isset($_POST['submit'])){
        if(isset($_POST['buscaNombre'])){
            $consulta = "SELECT * FROM Paciente WHERE nombre LIKE '%".$_POST['buscaNombre']."%'"; 
        }elseif(isset($_POST['buscaNumero'])){
            $consulta = "SELECT * FROM Paciente WHERE numero LIKE ".$_POST['buscaNumero'];
        }
        
        $ejecutarConsulta = mysqli_query($con, $consulta);
        $verFilas = mysqli_num_rows($ejecutarConsulta);
        $fila = mysqli_fetch_array($ejecutarConsulta);
        if(!$ejecutarConsulta){
            echo"Error en la consulta";
        }else{
            if($verFilas<1){
                echo"<tr><td>Sin registros</td></tr>";
            }else{
                for($i=0; $i<$verFilas; $i++){
				echo'
				    <tr>
				    <td>'.$fila[1].'</td>
				    <td>'.$fila[3].'</td>
				    <a href="dashboard.php"><td></td></a>
				    </tr>
				';
                    $fila = mysqli_fetch_array($ejecutarConsulta);
                }
            }
        }}
    ?>
    
    </table>
    
</div>
    
 
</div>

