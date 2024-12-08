<?php
// Configuración de la base de datos
$host = 'localhost'; // Cambia esto si tu base de datos está en otro servidor
$user = 'adair'; // Reemplaza con tu nombre de usuario de la base de datos
$password = 'tu_contraseña'; // Reemplaza con tu contraseña de la base de datos
$database = 'nombre_de_tu_base_de_datos'; // Reemplaza con el nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Establecer el conjunto de caracteres
$conexion->set_charset("utf8"); // Esto es opcional, pero recomendado para manejar caracteres especiales

?>