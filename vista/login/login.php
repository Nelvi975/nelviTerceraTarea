<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
}
require '../../conexion/db.php';

if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = $conn->prepare('SELECT id, usuario, password, cargo FROM usuarioss WHERE usuario = :usuario');
    $sql->bindParam(':usuario', $_POST['usuario']);
    $sql->execute();
    $results = $sql->fetch(PDO::FETCH_ASSOC);
    $message = '';

    if ($results > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: ../index.php");
    } else {
      $message = 'esta cuenta no existe';
    }
}
?>
<?php include 'LoginHead.php'; ?>
<form class="container col-4" action="Login.php" method="post">
    <div class="text-center">
        <img class="mb-4" src="../../imagen/logo.png" alt="Logo" width="300" height="100">
    </div>
    <div class="form-label-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="text" name="usuario" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Introduce tu usuario" required autofocus>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-label-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" name="password" class="form-control" id="clave" placeholder="Introduce tu contraseña" required>
    </div><br>
    <button type="submit" class="btn btn-lg btn-primary btn-block">Iniciar Sesión</button>
    <p class="mt-5 mb-3 text-muted text-center"><a href="registro.php">Registrarse</a></p>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2021</p>
</form>
<?php include 'LoginPie.php';