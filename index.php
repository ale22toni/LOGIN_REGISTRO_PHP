<?php 
include "config.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"])){
    header("Location: panel.php");
}


if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=md5($_POST["password"]);
    
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result= mysqli_query($conn, $sql);
    
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: panel.php");
    }else{
        echo "<script>alert('La contraseña o el email son incorrectos')</script>";
    }
    
    
}


?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/normalize.css" />
    <title>Login</title>
  </head>
  <body>
    <main class="login-design">
      <div class="waves"></div>
      <div class="login">
        <div class="login-data">
          <img src="assets/beer2.png" alt="" />
          <h1>Inicio de Sesión</h1>
          <form action="#" class="login-form">
            <div class="input-group">
              <label class="input-fill">
                <input type="email" name="email" id="email" required />
                <span class="input-label">Correo Electrónico</span>
                <i class="fas fa-envelope"></i>
              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">
                <input type="password" name="password" id="password" required />
                <span class="input-label">Contraseña</span>
                <i class="fas fa-lock"></i>
              </label>
            </div>
            <a href="#">¿Necesitas una Cuenta?</a>
            <input type="submit" value="Iniciar Sesión" class="btn-login" />
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
