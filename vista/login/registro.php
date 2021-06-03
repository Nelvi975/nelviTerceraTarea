<?php
require '../../conexion/db.php';

$message = '';

if(!empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['DNI']) && !empty($_POST['telefono']) && !empty($_POST['sexo']) && !empty($_POST['cargo'])){
    if($_POST['password']==$_POST['confirm_password']){
      if (!empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['DNI']) && !empty($_POST['telefono']) && !empty($_POST['sexo']) && !empty($_POST['cargo'])) {
        $sql = "INSERT INTO usuarioss (usuario, password, email, nombre, apellidos, DNI, telefono, sexo, cargo) VALUES (:usuario, :password, :email, :nombre, :apellidos, :DNI, :telefono, :sexo, :cargo)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':usuario', $_POST['usuario']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':apellidos', $_POST['apellidos']);
        $stmt->bindParam(':DNI', $_POST['DNI']);
        $stmt->bindParam(':telefono', $_POST['telefono']);
        $stmt->bindParam(':sexo', $_POST['sexo']);
        $stmt->bindParam(':cargo', $_POST['cargo']);


        if ($stmt->execute()){
            $message = 'Se a creado un nuevo usuario';
            header("Location: ./Login.php");
        }else{
            $message = 'Nose a creado ni un usuario';
        }
    }
  }
}
?>
<?php include 'LoginHead.php';
?>
<?php if (!empty($message)): ?>
<p><?= $message ?></p>
<?php endif; ?>
<p class="mt-5 mb-3 text-muted text-left"><a href="login.php"> Volver al Login </a></p>
<form class="container col-6" action="Registro.php" method="post">
    <div class="text-center">
        <img class="mb-3" src="../../imagen/logo.png" alt="Logo" width="300" height="95">
    </div>
     <div class="form-row">
    <div class="form-group col-md-6">
        <label for="nombres">Nombres</label>
        <input name="nombre" id="nombres" type="text" class="form-control" placeholder="First name" required>
    </div>
    <div class="form-group col-md-6">
        <label for="apellidos">Apellidos</label>
        <input id="apellidos" name="apellidos" type="text" class="form-control" placeholder="Last name" required>
    </div>
     </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo electrónico</label>
      <input type="email" name="email" class="form-control" id="correo" placeholder="correo" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">usuario</label>
      <input type="text" name="usuario" class="form-control" id="usuario" placeholder="usuario" required>
    </div>
  </div>  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" name="password" class="form-control" id="clave" placeholder="Password" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Vuelve a escribir la contraseña</label>
      <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="vuelve a escribir la contraseña" required>
    </div>
  </div> 
    <div class="form-row">   
    <div class="form-group col-md-6">
        <label for="dni">D.N.I.</label>
        <input type="text" name="DNI" id="dni" class="form-control" required>
    </div>
      <div class="form-group col-md-6">
      <label for="celular">Celular</label>
      <input type="text" name="telefono" class="form-control" id="celular" required>
    </div>
    </div>
 
  <div class="form-group">
    <label for="inputAddress">Dirección</label>
    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Av. Alfonso Ugarte Nº 6998" required>
  </div>
  <div class="form-row">
      <div class="form-group col-md-4">
      <label for="sexo">Sexo</label>
      <select id="sexo" name="sexo" class="form-control">
        <option selected>Masculino</option>
        <option>Femenino</option>
      </select>
    </div>
    <div class="form-group col-md-8">
    <label for="sexo">Cargo</label>
        <select type="text" class="form-control"  name="cargo">
            <option>administrador</option>
            <option selected>repartidor</option>
        </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form>
    </div>
<?php include 'LoginPie.php';


