<?php
include '../php/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $menu_id = $_POST['menu_id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $ubicacion = $_POST['ubicacion'];

    // Manejar la subida de imagen (opcional)
    if (isset($_FILES['imagen_menu']) && $_FILES['imagen_menu']['error'] == 0) {
        $target_dir = "../img/img_platillo/";
        
        // Generar un nombre único para la imagen
        $imagen_nombre = uniqid() . '_' . basename($_FILES['imagen_menu']['name']);
        $target_file = $target_dir . $imagen_nombre;
        
        // Intentar mover el archivo subido
        if (move_uploaded_file($_FILES['imagen_menu']['tmp_name'], $target_file)) {
            // Actualizar el usuario en la base de datos
            $sql = "UPDATE menu_items SET titulo=?, descripcion=?, precio=?, ubicacion=?, imagen_menu=? WHERE menu_id=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("sssssi", $titulo, $descripcion, $precio, $ubicacion, $imagen_nombre, $menu_id);

            if ($stmt->execute()) {
                echo '<script>window.location.href = "../dashboard/menus.php"; alert("Platillo Editado correctamente!"); </script>';
            } else {
                echo '<script>alert("No se pudo editar el platillo!"); window.location.href = "../dashboard/menus.php";</script>';
            }

            $stmt->close();
        } else {
            echo '<script>alert("Error al subir la imagen!"); window.location.href = "../dashboard/menus.php";</script>';
        }
    } else {
        // Actualizar el usuario sin cambiar la imagen
        $sql = "UPDATE menu_items SET titulo=?, descripcion=?, precio=?, ubicacion=? WHERE menu_id=?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ssssi", $titulo, $descripcion, $precio, $ubicacion, $menu_id);

        if ($stmt->execute()) {
            echo '<script>window.location.href = "../dashboard/menus.php"; alert("Platillo Editado correctamente!"); </script>';
        } else {
            echo '<script>alert("No se pudo editar el platillo!"); window.location.href = "../dashboard/menus.php";</script>';
        }

        $stmt->close();
    }

    $conexion->close();
}
?>