<?php

include_once("globals.php");
$ENV = $_GLOBALS["env"];

if ($ENV == "RICARDO") {
  $con = mysqli_connect("localhost","ricardo","","Consultorio");
} elseif ($ENV == "DEV") {
  $con = mysqli_connect("localhost","test","","Consultorio");
}elseif ($ENV == "FER") {
  $con = mysqli_connect("localhost","fer","micontra","RPacientes");
}
// Checar conexion
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
