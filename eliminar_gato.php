<?php
include 'conexion.php';

$id = $_POST['id'] ?? '';

// Validar que se haya recibido el ID a eliminar
if($id == ''){
    die("Falta el ID del gato");
}

// Sentencia SQL para borrar el registro según su ID
$sql = "DELETE FROM gatos WHERE id=$id";

if($conexion->query($sql)){
    echo "OK";
}else{
    echo "Error: " . $conexion->error;
}
?>
 