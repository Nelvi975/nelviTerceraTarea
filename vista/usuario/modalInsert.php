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
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombres">Nombres</label>
              <input name="nombre" id="nombre" type="text" class="form-control" placeholder="First name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="apellidos">Apellidos</label>
              <input id="apellidos" name="apellidos" type="text" class="form-control" placeholder="Last name" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Correo electrónico</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="correo" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">usuario</label>
              <input type="text" name="usuario" class="form-control" id="usuario" placeholder="usuario" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="DNI">D.N.I.</label>
              <input type="text" name="DNI" id="DNI" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
              <label for="telefono">Celular</label>
              <input type="text" name="telefono" class="form-control" id="telefono" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="sexo">Sexo</label>
              <select id="sexo" name="sexo" class="form-control">
                <option selected>Masculino</option>
                <option>Femenino</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="sexo">Cargo</label>
              <select type="text" class="form-control" name="cargo" id="cargo">
                <option>administrador</option>
                <option selected>repartidor</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="estado">Estado</label>
              <select type="text" class="form-control" name="estado" id="estado">
                <option>activo</option>
                <option selected>inactivo</option>
              </select>
            </div>
          </div>
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