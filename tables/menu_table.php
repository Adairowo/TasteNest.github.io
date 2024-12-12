<?php

include '../php/conexion.php'; 

?>

<div class="table-responsive">
    <table class="table table-hover" id="table_menus">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha de Registro</th>
                <th scope="col">Imagen</th>
                <th scope="col">Título</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Ubicación</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Obtener los platillos de la base de datos
            $sql = "SELECT * FROM menu_items ORDER BY menu_id ASC";
            $resultado = $conexion->query($sql);
            while ($menu_item = $resultado->fetch_assoc()) { ?>
                <tr id="menu_item_<?php echo $menu_item['menu_id']; ?>">
                    <th scope='row'><?php echo $menu_item['menu_id']; ?></th>
                    <td><?php echo $menu_item['created_at']; ?></td>
                    <td>
                    <?php
                         $imagen_menu = $menu_item['imagen_menu'];
                 if ($imagen_menu == '') {
                                    $imagen_menu = 'assets/imgs/sin-foto.jpg';
                    } else {
                     $imagen_menu = "../img/img_platillo/" . $imagen_menu;
                        }
                    ?>
                    <img src="<?php echo $imagen_menu; ?>" alt="<?php echo $menu_item['titulo']; ?>" 
                    style="width: 60px; height: 50px;" >
                    </td>
                    <td><?php echo $menu_item['titulo']; ?></td>
                    <td><?php echo $menu_item['descripcion']; ?></td>
                    <td><?php echo $menu_item['precio']; ?>$</td>
                    <td><?php echo $menu_item['ubicacion']; ?></td>
                    <td>
                        <button title="Ver detalles del platillo"class="btn btn-success" data-bs-toggle="modal" data-bs-target="#viewMenuModal"
                                    data-id="<?php echo $menu_item['menu_id']; ?>"
                                    data-titulo="<?php echo $menu_item['titulo']; ?>"
                                    data-descripcion="<?php echo $menu_item['descripcion']; ?>"
                                    data-precio="<?php echo $menu_item['precio']; ?>"
                                    data-imagen="<?php echo $imagen_menu; ?>">
                            <i class="bi bi-binoculars"></i>
                        </button>
                        <button class="btn btn-warning edit-button"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editMenuModal"
                                    data-id="<?php echo $menu_item['menu_id']; ?>"
                                    data-titulo="<?php echo $menu_item['titulo']; ?>"
                                    data-descripcion="<?php echo $menu_item['descripcion']; ?>"
                                    data-precio="<?php echo $menu_item['precio']; ?>"
                                    data-ubicacion="<?php echo $menu_item['ubicacion']; ?>">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button title="Eliminar datos del platillo" class="btn btn-danger delete"
                         data-bs-toggle="modal" data-bs-target="#deleteMenuModal" data-id="<?php echo $menu_item['menu_id']; ?>">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
            <script>
                $(document).ready(function() {
                var idEliminar = -1;
                 var filaEliminar = null;
    
    // Capturar el ID y la fila cuando se hace clic en el botón de eliminar
    $(".delete").click(function() {
        idEliminar = $(this).data('id');
        filaEliminar = $(this).closest('tr');
        console.log("ID a eliminar:", idEliminar);
    });
    
    // Evento para el botón de eliminación en el modal
    $(".deletemenu").click(function() {
        console.log("Intentando eliminar menú con ID:", idEliminar);
        
        $.ajax({
            url: '../acciones/deletemenu.php',
            method: 'POST',
            data: {
                id: idEliminar
            },
            success: function(response) {
                console.log("Respuesta del servidor:", response);
                
                if (filaEliminar) {
                    filaEliminar.fadeOut(1000, function() {
                        $(this).remove();
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error("Error en la solicitud:", error);
                alert("Hubo un error al eliminar el platillo");
            }
        });
    });
});
</script>
        </tbody>
    </table>
</div>