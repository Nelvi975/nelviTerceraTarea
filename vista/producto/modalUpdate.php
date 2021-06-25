<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
          <input type="text" id="id_pro" name="id_pro" hidden="">
              <label>Tipo de Producto</label>
              <input type="text" id="tipo_prou" name="tipo_prou" class="form-control form-control-sm" required="">
              <label>Marca</label>
              <input type="text" id="marca_prou" name="marca_prou" class="form-control form-control-sm" required="">
              <label>Precio</label>
              <input type="text" id="precio_prou" name="precio_prou" class="form-control form-control-sm" required>
              <label>Detalle</label>
              <input type="text" id="detalle_prou" name="detalle_prou" class="form-control form-control-sm" required>
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
