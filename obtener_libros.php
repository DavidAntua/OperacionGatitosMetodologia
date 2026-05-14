<?php
include 'conexion.php';

$sql = "SELECT * FROM gatos";
$resultado = $conexion->query($sql);

$gatos = [];

while($fila = $resultado->fetch_assoc()){
    $gatos[] = $fila;
}

echo json_encode($gatos);
?>