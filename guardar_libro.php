<?php
include 'conexion.php';

$nombre = $_POST['nombre'] ?? '';
$raza = $_POST['raza'] ?? '';
$edad = $_POST['edad'] ?? '';

if($nombre == '' || $raza == '' || $edad == ''){
    die("Faltan datos");
}

$sql = "INSERT INTO gatos(nombre, raza, edad)
VALUES('$nombre','$raza','$edad')";

if($conexion->query($sql)){
    echo "OK";
}else{
    echo "Error: " . $conexion->error;
}
?>