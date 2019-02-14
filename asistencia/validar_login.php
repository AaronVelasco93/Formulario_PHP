<?php
session_start();
include "conexion.php";
$usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];

$proceso = $conexion->query("SELECT * FROM usuarios WHERE nombre_usuario = '$usuario' and password = '$password'");

if ($resultado = mysqli_fetch_array($proceso)){

    $_SESSION['u_usuario']=$usuario;// user (alias) del usuario
    $_SESSION['g_usuario']=$resultado[7];//grupo del usuario, nivel de acceso permisos
    $_SESSION['u_nombre']=$resultado[0];//nombre del usuario
   
    $usuario = $_POST['nombre_usuario'];

      header('Location: ./dashboard.php');
}else {

    header ('Location: ./login_error.php');
}
?>