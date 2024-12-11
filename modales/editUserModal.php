<!-- modalAddUser .php -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUser ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning text-black">
                <h5 class="modal-title" id="editUser ModalLabel">Editar Usuario</h5>
                <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../acciones/edituser.php" method="post" enctype="multipart/form-data" id="editUser Form">
                <div class="modal-body">
                    <input type="hidden" name="user_id" id="edit_user_id">
                    <!-- Nivel -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Nivel de Usuario</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="level" value="admin" id="edit_level_admin" required>
                            <label for="edit_level_admin" class="form-check-label">Admin</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="level" value="user" id="edit_level_user" required>
                            <label for="edit_level_user" class="form-check-label">User </label>
                        </div>
                    </div>
                    <!-- Nombre Completo -->
                    <div class="mb-3">
                        <label for="edit_full_name" class="form-label fw-bold">Nombre Completo</label>
                        <input type="text" name="full_name" class="form-control" id="edit_full_name" placeholder="Ingresa el nombre completo" required>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="edit_email" class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" id="edit_email" placeholder="Ingresa el correo electrónico" required>
                    </div>
                    <!-- Username -->
                    <div class="mb-3">
                        <label for="edit_username" class="form-label fw-bold">Username</label>
                        <input type="text" name="username" class="form-control" id="edit_username" placeholder="Máximo 10 caracteres" required maxlength="10">
                    </div>
                    <!-- Contraseña -->
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning">Actualizar Usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Función para cargar los datos del usuario en el modal
    $(document).on('click', '.edit-button', function() {
        const userId = $(this).data('id');
        const level = $(this).data('level');
        const fullName = $(this).data('full_name');
        const email = $(this).data('email');
        const username = $(this).data('username');

        // Cargar los datos en el modal
        $('#edit_user_id').val(userId);
        $('input[name="level"][value="' + level + '"]').prop('checked', true);
        $('#edit_full_name').val(fullName);
        $('#edit_email').val(email);
        $('#edit_username').val(username);
        $('#edit_password').val(''); // No mostrar la contraseña por razones de seguridad

        // Mostrar el modal
        $('#editUser Modal').modal('show');
    });
</script>