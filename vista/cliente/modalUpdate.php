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
            <input type="text" id="id_cli" name="id_cli" hidden="">
            <label>Nombre</label>
              <input type="text" id="nom_useru" name="nom_useru" class="form-control form-control-sm" required="">
              <label>Apellidos</label>
              <input type="text" id="ape_useru" name="ape_useru" class="form-control form-control-sm" required="">
              <label>telefono</label>
              <input type="text" id="telf_useru" name="telf_useru" class="form-control form-control-sm" required="">
              <label>DNI</label>
              <input type="text" id="dni_useru" name="dni_useru" class="form-control form-control-sm" required="">
              <label>Sexo</label>
              <input type="text" id="sex_useru" name="sex_useru" class="form-control form-control-sm" required="">
              <label>Direccion</label>
              <input type="text" id="direc_useru" name="direc_useru" class="form-control form-control-sm" required="">
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
