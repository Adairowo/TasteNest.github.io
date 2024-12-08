<?php
include 'conexion.php'; // Asegúrate de que este archivo contenga la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        die("Las contraseñas no coinciden.");
    }

    // Hashear la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar en la base de datos
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registro exitoso. Puedes iniciar sesión ahora.";
        header("Location: login.html"); // Redirigir a la página de login
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>