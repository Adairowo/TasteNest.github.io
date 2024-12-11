<!-- modalAddUser.php -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addUserModalLabel">Agregar Usuario</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../acciones/adduser.php" method="post" enctype="multipart/form-data" id="userForm">
                <div class="modal-body">
                    <!-- Nivel -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Nivel de Usuario</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="level" value="admin" id="level_admin" required>
                            <label for="level_admin" class="form-check-label">Admin</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="level" value="user" id="level_user" required>
                            <label for="level_user" class="form-check-label">User</label>
                        </div>
                    </div>
                    <!-- Nombre Completo -->
                    <div class="mb-3">
                        <label for="full_name" class="form-label fw-bold">Nombre Completo</label>
                        <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Ingresa el nombre completo" required>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingresa el correo electrónico" required>
                    </div>
                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Máximo 10 caracteres" required maxlength="10">
                    </div>
                    <!-- Contraseña -->
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Crea una contraseña segura" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>
