<?php
include '../php/conexion.php';

// Verificar si se ha enviado un formulario por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $ubicacion = $_POST['ubicacion'];

    // Manejar la subida de imagen
    if (isset($_FILES['imagen_menu']) && $_FILES['imagen_menu']['error'] == 0) {
        $target_dir = "../img/img_platillo/";
        
        // Generar un nombre único para la imagen
        $imagen_nombre = uniqid() . '_' . basename($_FILES['imagen_menu']['name']);
        $target_file = $target_dir . $imagen_nombre;
        
        // Intentar mover el archivo subido
        if (move_uploaded_file($_FILES['imagen_menu']['tmp_name'], $target_file)) {
            // Preparar la consulta SQL para insertar el menú
            $sql = "INSERT INTO menu_items (titulo, descripcion, precio, ubicacion, imagen_menu, created_at) 
                    VALUES (?, ?, ?, ?, ?, NOW())";
            
            // Preparar la sentencia
            $stmt = $conexion->prepare($sql);
            
            // Vincular los parámetros
            $stmt->bind_param("ssdss", $titulo, $descripcion, $precio, $ubicacion, $imagen_nombre);
            
            // Ejecutar la consulta
            if ($stmt->execute()) {
                // Redirigir con mensaje de éxito
                echo '<script>
                        alert("Menú agregado exitosamente");
                        window.location = "../dashboard/menus.php";
                      </script>';
            } else {
                // Error al insertar en la base de datos
                echo '<script>
                        alert("Error al agregar el menú: ' . $stmt->error . '");
                        window.location = "../dashboard/menus.php";
                      </script>';
            }
            
            // Cerrar la sentencia
            $stmt->close();
        } else {
            // Error al subir la imagen
            echo '<script>
                    alert("Error al subir la imagen");
                    window.location = "../dashboard/menus.php";
                  </script>';
        }
    } else {
        // No se subió imagen
        echo '<script>
                alert("No se seleccionó ninguna imagen");
                window.location = "../dashboard/menus.php";
              </script>';
    }

    // Cerrar conexión
    $conexion->close();
}
?>