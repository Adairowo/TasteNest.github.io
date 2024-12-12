<?php

include '../php/conexion.php'; 


?>

<div class="table-responsive">
    <table class="table table-hover" id="table_usuarios">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha de Registro</th>
                <th scope="col">Nivel</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Obtener los usuarios de la base de datos
            $sql = "SELECT * FROM users ORDER BY user_id ASC";
            $resultado = $conexion->query($sql);
            while ($usuario = $resultado->fetch_assoc()) { ?>
                <tr id="usuario_<?php echo $usuario['user_id']; ?>">
                    <th scope='row'><?php echo $usuario['user_id']; ?></th>
                    <td><?php echo $usuario['created_at']; ?></td>
                    <td><?php echo $usuario['level']; ?></td>
                    <td><?php echo $usuario['full_name']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $usuario['username']; ?></td>
                    <td>
                        <button title="Editar datos del usuario" class="btn btn-warning edit-button" 
                                data-id="<?php echo $usuario['user_id']; ?>"
                                data-level="<?php echo $usuario['level']; ?>"
                                data-full_name="<?php echo $usuario['full_name']; ?>"
                                data-email="<?php echo $usuario['email']; ?>"
                                data-username="<?php echo $usuario['username']; ?>"
                                data-bs-toggle="modal" data-bs-target="#editUserModal">
                                <i class="bi bi-pencil-square"></i>
                        </button>
                        <button title="Eliminar datos del usuario" class="btn btn-danger delete"data-id="<?php echo $usuario['user_id']; ?>"
                         data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
            <script>
$(document).ready(function() {
    var idEliminar = -1;
    var fila;
    
    $(".delete").click(function() {
        idEliminar = $(this).data('id');
        fila = $(this).parent('td').parent('tr');
    });
    
    $(".deleteuser").click(function() {
        $.ajax({
            url: '../acciones/deleteuser.php',
            method: 'POST',
            data: {
                id: idEliminar
            }
        }).done(function(res) {
            $(fila).fadeOut(1000);
        });
    });
});
</script>

        </tbody>
    </table>
</div>