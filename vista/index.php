<?php 
  session_start();
  
  require '../conexion/db.php';
  
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, usuario, password, email, nombre, apellidos, DNI, telefono, sexo, cargo FROM usuarioss WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);
      
      $user = null;
      
    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<?php
if($user['cargo']=="administrador")
 require 'particiones/MenuAdmin.php';
if($user['cargo']=="repartidor")
 require 'particiones/Menu.php';
?>
<?php if (!empty($user)): ?>
<h2>Bienvenido al inicio!!</h2>
<!--Doom pdf-->
<?php
require 'particiones/PieMenu.php';
?>
<?php else: ?>
    <h2>Escoge loguearse o Registrarse</h2>
    <p>
        <a href="../logins/Login.php">Login</a> o
        <a href="../logins/Registro.php">Registrarse</a>
    </p>
<?php endif; ?>