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
          <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
            <input type="text" id="id_pe" name="id_pe" hidden="">
            <input type="text" id="id_DdP" name="id_DdP" hidden="">
            <label>Nombre Pedido</label>
              <input type="text" id="nom_peu" name="nom_peu" class="form-control form-control-sm" required="">
              <label>Estado</label>
              <input type="text" id="Estado_peu" name="Estado_peu" class="form-control form-control-sm" required="">
              <label>Precio</label>
              <input type="text" id="Precio_peu" name="Precio_peu" class="form-control form-control-sm" required>
              <label>distrito</label>
              <input type="text" id="distritou" name="distritou" class="form-control form-control-sm" required>
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
