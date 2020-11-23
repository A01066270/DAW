<?php
require_once('db.php');
include('../html/previous-content.html');
include('../html/_form.html');
include('../html/post-content.html');


if(isset($_POST['submit'])){
    $id = rand(20000,29999);
    $sexo = $_POST["sexo"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $rfc = $_POST["rfc"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $email = $_POST["email"];
    $emailFacturas = $_POST["emailFacturas"];
    $razonsocial =$_POST["razonsocial"];
    $direccion = $_POST["direccion"];
    $codigoPostal = $_POST["codigoPostal"];
    insertar_paciente($id, $nombre, $sexo, $telefono, $rfc, $fechaNacimiento, $email, $emailFacturas, $razonsocial, $direccion, $codigoPostal);
    
}


?>