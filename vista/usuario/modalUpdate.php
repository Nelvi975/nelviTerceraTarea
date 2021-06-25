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
          <input type="text" id="id" name="id" hidden="">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombres">Nombres</label>
              <input name="nombreu" id="nombreu" type="text" class="form-control" placeholder="First name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="apellidos">Apellidos</label>
              <input id="apellidosu" name="apellidosu" type="text" class="form-control" placeholder="Last name" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Correo electrónico</label>
              <input type="emailu" name="emailu" class="form-control" id="emailu" placeholder="correo" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">usuario</label>
              <input type="text" name="usuariou" class="form-control" id="usuariou" placeholder="usuario" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" name="passwordu" class="form-control" id="passwordu" placeholder="Password" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="DNIu">D.N.I.</label>
              <input type="text" name="DNIu" id="DNIu" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
              <label for="telefonou">Celular</label>
              <input type="text" name="telefonou" class="form-control" id="telefonou" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="sexou">Sexo</label>
              <select id="sexou" name="sexou" class="form-control">
                <option selected>Masculino</option>
                <option>Femenino</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="sexo">Cargo</label>
              <select type="text" class="form-control" name="cargou" id="cargou">
                <option>administrador</option>
                <option selected>repartidor</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="estado">Estado</label>
              <select type="text" class="form-control" name="estadou" id="estadou">
                <option>activo</option>
                <option selected>inactivo</option>
              </select>
            </div>
          </div>
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