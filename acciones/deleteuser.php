<?php
include '../php/conexion.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Verificar que el ID no esté vacío
    if (!empty($id)) {
        // Preparar la consulta para eliminar el usuario
        $sql = "DELETE FROM users WHERE user_id = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id); // "i" indica que el parámetro es un entero

        if ($stmt->execute()) {
            echo "Usuario eliminado con éxito.";
        } else {
            echo "Error al eliminar el usuario: " . $conexion->error;
        }

        $stmt->close();
    } else {
        echo "ID de usuario no válido.";
    }
} else {
    echo "Método de solicitud no válido.";
}

$conexion->close();
?>