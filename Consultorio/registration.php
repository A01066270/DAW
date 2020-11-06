<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Nuevo Usuario</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body class="body-login">
<?php
require('db.php');

if (isset($_REQUEST['username'])){

  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($con,$username);
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con,$email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  $reg_date = date("Y-m-d H:i:s");
  $query = "INSERT into `users` (username, password, email, reg_date)

  VALUES ('$username', '".md5($password)."', '$email', '$reg_date')"; //md5 es para proteccion de contraseñas
  $result = mysqli_query($con,$query);
  if($result){
    echo "<div class='form-container'>
            <div class='form'>
              <h1 id='form-title'>Usuario registrado correctamente</h1>
              <br/>
              <div class='inputs-container'>
                <p>Haga click<a href='login.php'>aquí</a> para iniciar sesión</p>
              </div>
            </div>
          </div>";
  }
} else {
  ?>
  <div class="form-container">
    <div class="form">
      <h1 id="form-title">Nuevo Usuario</h1>
      <form name="registration" action="" method="post">
        <div class="inputs-container">
          <input type="text" name="username" placeholder="Nombre de usuario" required />
          <input type="email" name="email" placeholder="Email" required />
          <input type="password" name="password" placeholder="Contraseña" required />
          <input type="submit" name="submit" value="Register"/>
          <p>Si desea iniciar sesión haga click<a href='login.php'> aquí</a></p>
        </div>
      </form>
    </div>
  </div>
<?php } ?>
</body>
</html>
