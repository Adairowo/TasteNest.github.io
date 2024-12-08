<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Dashboard</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Montserrat", sans-serif;
}
        </style>
</head>
<body>
    <div class="d-flex">
        <!-- SIDEBAR -->
        <?php include "../layouts/aside.php" ?>
        <!-- END SIDEBAR -->
        <main class="flex-grow-1 bg-light">
            <!-- HEADER -->
        <?php include "../layouts/header.php" ?>
            <!-- END HEADER -->
            <div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <button class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#addUserModal">
                <i class="bi bi-plus-circle-fill"></i> Agregar Usuario
              </button>
            </div>
            <!-- Tabla de usuarios -->
            <div class="table-responsive" style="padding: 0px 50px 50px">
              <table class="table table-striped table-hover">
                <thead class="table-primary" >
                  <tr>
                    <th>ID</th>
                    <th>Fecha de registro</th>
                    <th>Nivel</th>
                    <th>Nombre completo</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while($fila=mysqli_fetch_array($res)){
                  ?>
                  <tr>
                    <td><?php echo $fila['user_id']  ?></td>
                    <td><?php echo $fila['created_at']  ?></td>
                    <td><?php echo $fila['level']  ?></td>
                    <td><?php echo $fila['full_name']  ?></td>
                    <td><?php echo $fila['username']  ?></td>
                       <!-- Botón para editar -->
    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#addUserModal">
      <i class="bi bi-pencil-square"></i> Editar
  </button> 
  <!-- Botón para eliminar -->
  <button class="btn btn-sm btn-danger btnEliminar"
          data-id="<?php echo $fila['user_id']; ?>"
          data-bs-toggle="modal" data-bs-target="#deleteUserModal">
      <i class="bi bi-trash"></i> Eliminar
  </button>
  </td>
          </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div>
      <!-- Modal para agregar usuario -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addUserModalLabel">Agregar Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="userForm">
          <div class="modal-body">
            <div class="mb-3">
              <label for="username" class="form-label">Nombre de Usuario</label>
              <input type="text" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
              <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirm-password" required>
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

<!-- Alerta de confirmación para eliminar -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteUserModalLabel">Confirmar Eliminación</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              ¿Estás seguro de que deseas eliminar a este registro? Esta acción no se puede deshacer.
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-danger eliminar" data-bs-dismiss="modal">Eliminar</button>
          </div>
      </div>
  </div>
</div>

   <!-- Modal para alertas -->
   <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="alertModalLabel">Validación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body" id="alertModalBody">
          <!-- Mensaje dinámico de error o éxito -->
        </div>
        <div class="modal-footer">
          <button type="button" id="modalConfirmButton" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
</div>
</main>
    </div>
</body>
</html>