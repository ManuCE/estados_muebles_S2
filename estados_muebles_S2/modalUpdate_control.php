<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <form id="frminsertuc" onsubmit="return actualizarDatosControl()" method="post">
            <input type="hidden" id="id_control" name="id_mueble">
              <label>Mueble</label>
              <input type="text" id="mueble" name="mueble" class="form-control form-control-sm" required="">
              <label>Estado</label>
              <input type="text" id="estado" name="estado" class="form-control form-control-sm" required="">
              <label>Usuario</label>
              <input type="text" id="usuario" name="usuario" class="form-control form-control-sm" required="">
              <br>
               <input type="submit" value="Actualizar" class="btn btn-warning">
          </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
