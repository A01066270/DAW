<?php
$consultap = "SELECT nombre as paciente, telefono as numero, email as correo FROM Pacientes ORDER BY nombre";
$ejecutar_consulta =mysqli_query($con, $consultap);

$resultado = '<table class="resultados">';
$resultado .= '<tr><td><em>Nombre</em></td><td><em>Número</em></td><td><em>Correo Electronico</em></td></tr>';

while ($row = mysqli_fetch_array($ejecutar_consulta, MYSQLI_ASSOC)){
    $resultado .= '<tr>';
    $resultado .= '<td>'.$row["paciente"].'</td>';
    $resultado .= '<td>'.$row["numero"].'</td>';
    $resultado .= '<td>'.$row["correo"].'</td>';
    $resultado .= '</tr>';
}
echo $resultado;
?>