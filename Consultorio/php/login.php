<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inicar Sesión</title>
  <link rel="stylesheet" href="../style.css" />
</head>
<body class="body-login">
<?php
require('db.php');
session_start();

if (isset($_POST['username'])){

  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($con,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  $query = "SELECT * FROM `users` WHERE username = '$username' and password = '".md5($password)."'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);

  if($rows==1){
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
  }else{
    echo "<div class='form-container'>
            <div class='form'>
              <h1 id='form-title'>Usuario o contraseña incorrectos</h1>
              <br/>
              <div class='inputs-container'>
                <h2><a href='login.php'>Intente de nuevo.</a></h2>
                <h2>O haga click<a href='registration.php'> aquí</a> para registrarse</h2>
              </div>
            </div>
          </div>";
    }
}else{
  ?>
  <div class="form-container">
    <div class="form">
      <h1 id="form-title">Iniciar Sesión</h1>
      <form action="" method="post" name="login">
        <div class="inputs-container">
          <input type="text" name="username" placeholder="Nombre de usuario" required />
          <input type="password" name="password" placeholder="Contraseña" required />
          <input id="form-btn" name="submit" type="submit" value="Iniciar Sesión"/>
          <p>Si desea registrar nuevo usuario, haga click<a href='registration.php'> aquí</a></p>
        </div>
      </form>
    </div>
  </div>
<?php } ?>
</body>
</html>
