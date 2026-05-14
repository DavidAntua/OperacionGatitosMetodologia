<?php
$host = "localhost";
$user = "root";        // Usuario por defecto en XAMPP
$pass = "";            // Contraseña por defecto en XAMPP (vacía)
$db   = "pomni"; // Cambia esto por el nombre real de tu BD

// Crear la conexión usando MySQLi
$conexion = new mysqli($host, $user, $pass, $db);

// Verificar si hay errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Configurar el conjunto de caracteres a UTF-8 para evitar problemas con acentos o eñes
$conexion->set_charset("utf8");

?>
