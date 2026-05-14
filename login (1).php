<?php
session_start();
include 'conexion.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){

    $user = $resultado->fetch_assoc();

    if(password_verify($password, $user['password'])){

        $_SESSION['usuario'] = $user['usuario'];

        header("Location: index.html");

    }else{
        echo "Contraseña incorrecta";
    }

}else{
    echo "Usuario no encontrado";
}
?>