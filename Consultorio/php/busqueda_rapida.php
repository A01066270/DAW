<br>
<h1 class="text-center">Acceso Rápido</h1>
<div style="height: auto">
   <form method="post">
    <table>
        <tr style='bottom-border: solid 1px;'>
            <td><label >Nombre</label></td>
            <td><label>Número de Teléfono</label></td>
        </tr>
        
        <tr>
            <td><input name="buscaNombre"  type=text ></td>
            <td><input name="buscaNumero" type=text ></td>
        </tr>
        <tr>
            <td><input id="Buscar" name="submit" class="submit" type="submit" value="Buscar" ></td>
        </tr>
    </table>
    </form>   

    
<div>
    <table style="color:black">
    <tr>
        <td><em>Nombre</em></td>
        <td><em>Número</em></td>
        <td><em>Expediente</em></td>
    </tr>
  <?php
        if(isset($_POST['submit'])){
          
        $consulta = "SELECT * FROM Paciente WHERE nombre LIKE '%".$_POST['buscaNombre']."%'"; 
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

