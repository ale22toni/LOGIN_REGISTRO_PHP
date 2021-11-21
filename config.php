<?php 

$server="localhost:3308";
$user="root";
$pass="";
$database="user";

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("Conexión fallida");
}

?>