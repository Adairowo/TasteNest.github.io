<!-- Modal -->
<div class="modal fade" id="viewMenuModal" tabindex="-1" aria-labelledby="viewMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewMenuModalLabel">Detalles del Platillo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img id="modal-imagen" src="" alt="Imagen del Platillo" style="max-width: 100%; height: auto;">
                </div>
                <h4 id="modal-titulo" class="mt-3"></h4>
                <p id="modal-descripcion" class="mt-2"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#viewMenuModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var titulo = button.data('titulo');
            var descripcion = button.data('descripcion');
            var precio = button.data('precio');
            var imagen = button.data('imagen');

            var modal = $(this);
            modal.find('.modal-title').text('Detalles del platillo ' + id);
            modal.find('#imagen-menu').attr('<?php echo $imagen_menu; ?>', imagen);
            modal.find('#titulo-menu').text(titulo);
            modal.find('#descripcion-menu').text(descripcion);
            modal.find('#precio-menu').text('Precio: ' + precio + '$');
        });
    });
</script>