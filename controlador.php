<?php 
session_start();

if (!empty($_POST["botoningresar"])) {
if (empty($_POST ["usuario"]) || empty($_POST["password"])){
    echo "LOS CAMPOS ESTAN VACIOS";
 }  else {
    $usuario=$_POST["usuario"];
    $clave=$_POST["password"];
    $sql=$conexion->query("select * from usuarios where usuario='$usuario' and contraseña='$clave'");
    if ($datos=$sql->fetch_object()){

        $_SESSION["usuario"]=$usuario; 
     
        header ("location:home.php");
        exit(); 
    } else {
        echo "ACCESO DENEGADO";

    }

    }

    
}


?>