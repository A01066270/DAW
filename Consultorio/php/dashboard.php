<?php
require('db.php');
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Citas</title>
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div id="viewport">
  <!-- Sidebar -->
    <div id="sidebar">
      <header>
        <a href="dashboard.php">LOGO</a>
      </header>
      <ul class="nav">
        <li class="li-dash">
          <a href="#">Citas</a>
        </li>
        <li class="li-dash">
          <a href="#">Pacientes</a>
        </li>
        <li class="li-dash">
          <a href="#">Presupuesto Dental</a>
        </li>
        <li class="li-dash">
          <a href="#">Consultorios</a>
        </li>
        <li class="li-dash">
          <a href="#">Empleados</a>
        </li>
      </ul>
    </div>

  <!-- Content -->
  <div id="content">
    <nav class="navbar">
      <div class="container-nav">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <p id="sesion" class="sesion" onclick="dropdown()"><?php echo $_SESSION['username'];?></p>
            <div id="menu" class="dropdown-content">
              <a href="logout.php">Cerrar Sesión</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- A partir de aquí, se coloca el contenido en todo lo que no es navbar o sidenav -->
    <div class="container-fluid">
      <img class="dummy" src="cal-dummy.png"></img>
    </div>
  </div>
</div>

<!-- Script para que funcione el dropdown. Pasar a archivo js cuando se tengan más scripts -->
<script>
// Función que detecta cuando usuario da click en username
function dropdown() {
  document.getElementById("menu").classList.toggle("show");
}

// Cierra el dropdown cuando el usuario da click en cualquier parte
window.onclick = function(event) {
  if (!event.target.matches('.sesion')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
