<?php
include '../php/conexion.php'; 

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Verificar que el ID no esté vacío
    if (!empty($id)) {
        // Preparar la consulta para eliminar el menú
        $sql = "DELETE FROM menu_items WHERE menu_id = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo json_encode([
                'success' => true, 
                'message' => "Platillo eliminado con éxito.",
                'id' => $id
            ]);
        } else {
            echo json_encode([
                'success' => false, 
                'message' => "Error al eliminar el platillo: " . $conexion->error
            ]);
        }

        $stmt->close();
    } else {
        echo json_encode([
            'success' => false, 
            'message' => "ID de platillo no válido."
        ]);
    }
} else {
    echo json_encode([
        'success' => false, 
        'message' => "Método de solicitud no válido."
    ]);
}

$conexion->close();
?>