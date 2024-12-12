<!-- modalAddUser .php -->
<div class="modal fade" id="editMenuModal" tabindex="-1" aria-labelledby="editMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning text-black">
                <h5 class="modal-title" id="editMenuModalLabel">Editar Platillo</h5>
                <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../acciones/editmenu.php" method="post" enctype="multipart/form-data" id="editMenuForm">
                <div class="modal-body">
                    <input type="hidden" name="menu_id" id="edit_menu_id">
                    <!-- Título -->
                    <div class="mb-3">
                        <label for="edit_titulo" class="form-label fw-bold">Título del Menú</label>
                        <input type="text" name="titulo" class="form-control" id="edit_titulo" placeholder="Ingresa el título del menú" required>
                    </div>
                    <!-- Imagen -->
                    <div class="mb-3">
                        <label for="edit_imagen_menu" class="form-label fw-bold">Imagen del Menú</label>
                        <input type="file" name="imagen_menu" class="form-control" id="edit_imagen_menu">
                    </div>
                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="edit_descripcion" class="form-label fw-bold">Descripción del Menú</label>
                        <textarea name="descripcion" class="form-control" id="edit_descripcion" placeholder="Ingresa la descripción del menú" required></textarea>
                    </div>
                    <!-- Precio -->
                    <div class="mb-3">
                        <label for="edit_precio" class="form-label fw-bold">Precio del Menú</label>
                        <input type="number" name="precio" class="form-control" id="edit_precio" placeholder="Ingresa el precio del menú" required step="0.01">
                    </div>
                    <!-- Ubicación -->
                    <div class="mb-3">
                        <label for="edit_ubicacion" class="form-label fw-bold">Ubicación del Menú</label>
                        <input type="text" name="ubicacion" class="form-control" id="edit_ubicacion" placeholder="Ingresa la ubicación del menú" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning">Actualizar Platillo</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Función para cargar los datos del platillo en el modal
    $(document).on('click', '.edit-button', function() {
        const menuId = $(this).data('id');
        const titulo = $(this).data('titulo');
        const descripcion = $(this).data('descripcion');
        const precio = $(this).data('precio');
        const ubicacion = $(this).data('ubicacion');

        // Cargar los datos en el modal
        $('#edit_menu_id').val(menuId);
        $('#edit_titulo').val(titulo);
        $('#edit_descripcion').val(descripcion);
        $('#edit_precio').val(precio);
        $('#edit_ubicacion').val(ubicacion);
        // No es necesario cargar la imagen en el modal

        // Mostrar el modal
        $('#editMenuModal').modal('show');
    });
</script>


