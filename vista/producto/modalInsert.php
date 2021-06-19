<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">
              <label>Tipo de Producto</label>
              <input type="text" id="tipo_pro"    name="tipo_pro" class="form-control form-control-sm" required>
              <label>Marca</label>
              <input type="text" id="marca_pro"   name="marca_pro" class="form-control form-control-sm" required>
              <label>Precio</label>
              <input type="text" id="precio_pro"  name="precio_pro" class="form-control form-control-sm" required>
              <label>Detalle</label>
              <input type="text" id="detalle_pro" name="detalle_pro" class="form-control form-control-sm" required>
              <br>
               <input type="submit" value="Guardar" class="btn btn-primary">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

