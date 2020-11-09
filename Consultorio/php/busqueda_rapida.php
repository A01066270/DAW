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
               <input id="Buscar" name="submit_nom" class="submit" type="submit" value="Buscar por Nombre" >
           </div>

           <div>
           <h3>Teléfono</h3>
               <input name="buscaNumero" placeholder="1234567890" type=text >
               <input id="Buscar" name="submit_tel" class="submit" type="submit" value="Buscar por Teléfono" >
           </div>
       </div>
       
    </form>   

    
<div>
    <table class="resultado_busqueda" >
    <tr>
        <td><em>Nombre</em></td>
        <td><em>Número</em></td>
        <td><em>Expediente</em></td>
    </tr>
  <?php
        if(isset($_POST['submit_nom'])){
        
            $consulta = "SELECT nombre, telefono FROM Paciente WHERE nombre LIKE '%".$_POST['buscaNombre']."%'";       
        
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
				    <td>'.$fila[0].'</td>
				    <td>'.$fila[1].'</td>
				    <a href="dashboard.php"><td></td></a>
				    </tr>
				';
                    $fila = mysqli_fetch_array($ejecutarConsulta);
                }
            }
        }}elseif(isset($_POST['submit_tel'])){
        
        $consulta = "SELECT nombre, telefono FROM Paciente WHERE telefono LIKE ".$_POST['buscaNumero'];       
        
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
    
    </table>
    
</div>
    
 
</div>

