<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">
              <label>Nombre Tienda</label>
              <input type="text" id="nom_ti" name="nom_ti" class="form-control form-control-sm" required="">
              <label>Propietario</label>
              <input type="text" id="nom_prop_ti" name="nom_prop_ti" class="form-control form-control-sm" required>
              <label>Durección</label>
              <input type="text" id="direc_ti" name="direc_ti" class="form-control form-control-sm" required>
              <label>telefono</label>
              <input type="text" id="telf_ti" name="telf_ti" class="form-control form-control-sm" required="">
              <label>Rubro</label>
              <input type="text" id="rubro_ti" name="rubro_ti" class="form-control form-control-sm" required="">
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

