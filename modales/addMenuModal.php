<!--lAddMenuModal.php -->
<div class="modal fade" id="addMenuModal" tabindex="-1" aria-labelledby="addMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addMenuModalLabel">Agregar Menú</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../acciones/addmenu.php" method="post" enctype="multipart/form-data" id="menuForm">
                <div class="modal-body">
                    <!-- Título -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label fw-bold">Título del Menú</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingresa el título del menú" required>
                    </div>
                    <!-- Imagen -->
                    <div class="mb-3">
                        <label for="imagen_menu" class="form-label fw-bold">Imagen del Menú</label>
                        <input type="file" name="imagen_menu" class="form-control" id="imagen_menu" required>
                    </div>
                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label fw-bold">Descripción del Menú</label>
                        <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Ingresa la descripción del menú" required></textarea>
                    </div>
                    <!-- Precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label fw-bold">Precio del Menú</label>
                        <input type="number" name="precio" class="form-control" id="precio" placeholder="Ingresa el precio del menú" required step="0.01">
                    </div>
                    <!-- Ubicación -->
                    <div class="mb-3">
                        <label for="ubicacion" class="form-label fw-bold">Ubicación del Menú</label>
                        <input type="text" name="ubicacion" class="form-control" id="ubicacion" placeholder="Ingresa la ubicación del menú" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Menú</button>
                </div>
            </form>
        </div>
    </div>
</div>
