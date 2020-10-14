<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    //include("_sidenav.html");
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registrar Paciente</h1>
        <input type="text" class="login-input" name="name" placeholder="Nombre completo del paciente" required />
        <input type="text" class="login-input" name="telefono" placeholder="Telefono" required />
        <input type="text" class="login-input" name="rfc" placeholder="RFC" required />
        <label>Fecha de nacimiento</label>
        <input type="date" class="login-input" name="username" placeholder="Fecha de nacimiento" required />
        <input type="text" class="login-input" name="email" placeholder="Email Address">
        <input type="text" class="login-input" name="username" placeholder="Direccion" required />
        <input type="text" class="login-input" name="razonsocial" placeholder="Razon Social">
        <br>
        <hr>
        <br>
        <input type="text" class="login-input" name="rfc" placeholder="Motivo primera visita" required />
        <input id="type" class="login-input" list="list2" name="ecronica" placeholder="Tiene el paciente alguna enfermedad cronica?">
            <datalist id="list2">
            <option value="No">
            <option value="Cardiaca">
            <option value="Pulmonar">
            <option value="Renal">
            <option value="Diabetes">
            </datalist>
        <input type="text"  class="observaciones" placeholder="Observaciones" rquired />        <input type="submit" name="submit" value="Registrar" class="login-button">
    </form>
<?php
    }
?>
</body>
</html>
