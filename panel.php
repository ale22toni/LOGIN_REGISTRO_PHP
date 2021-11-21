<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
}

?>
<h1>BIENVENIDO A SU CUENTA</h1><br><br>
<a href="logout.php">Desconectar</a>