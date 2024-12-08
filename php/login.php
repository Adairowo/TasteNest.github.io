<?php
session_start();
include 'conexion.php'; // Asegúrate de que este archivo contenga la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consultar el usuario en la base de datos
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($password, $user['password'])) {
            // Almacenar información del usuario en la sesión
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['level'] = $user['level']; // Para verificar permisos más adelante
            header("Location: pedidos.html"); // Redirigir a la página de pedidos
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $stmt->close();
    $conexion->close();
}
?>