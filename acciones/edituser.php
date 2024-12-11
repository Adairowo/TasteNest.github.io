<?php
include '../php/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $level = $_POST['level'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password']; 

    // Actualizar el usuario en la base de datos
    $sql = "UPDATE users SET level=?, full_name=?, email=?, username=?, password=? WHERE user_id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssi", $level, $full_name, $email, $username, $password, $user_id);

    if ($stmt->execute()) {
        echo '<script>window.location.href = "../dashboard/users.php"; alert("Usuario Editado correctamente!"); </script>';
    } else {
        echo '<script>alert("No se pudo editar el usuario!"); window.location.href = "../dashboard/users.php";</script>';
    }

    $stmt->close();
    $conexion->close();
}
?>