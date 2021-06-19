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
          <form id="frminsertC" onsubmit="return insertarDatos()" method="post">
              <label>Nombre</label>
              <input type="text" id="nom_user" name="nom_user" class="form-control form-control-sm" required="">
              <label>Apellidos</label>
              <input type="text" id="ape_user" name="ape_user" class="form-control form-control-sm" required="">
              <label>telefono</label>
              <input type="text" id="telf_user" name="telf_user" class="form-control form-control-sm" required="">
              <label>DNI</label>
              <input type="text" id="dni_user" name="dni_user" class="form-control form-control-sm" required="">
              <label>Sexo</label>
              <input type="text" id="sex_user" name="sex_user" class="form-control form-control-sm" required="">
              <label>Direccion</label>
              <input type="text" id="direc_user" name="direc_user" class="form-control form-control-sm" required="">
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

