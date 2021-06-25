<?php
class usuarioControlador{
    public function MostrarDatos(){
        require_once '../../conexion/conexion.php';
         $query= $conn->prepare("SELECT id, usuario, password, email, nombre, apellidos, DNI, telefono, sexo, cargo, estado FROM usuarioss");
         $query->execute();
         return $query->fetchAll();
     }
     public static function insertarDatos($datos){
        require_once '../../conexion/conexion.php';
         $sql="INSERT into usuarioss (usuario, password, email, nombre, apellidos, DNI, telefono, sexo, cargo, estado)
                       values (:usuario, :password, :email, :nombre, :apellidos, :DNI, :telefono, :sexo, :cargo, :estado)";
         $query=$conn->prepare($sql);
         $query->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
         $query->bindParam(":password", $datos["password"], PDO::PARAM_STR);
         $query->bindParam(":email", $datos["email"], PDO::PARAM_STR);
         $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
         $query->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
         $query->bindParam(":DNI", $datos["DNI"], PDO::PARAM_INT);
         $query->bindParam(":telefono", $datos["telefono"], PDO::PARAM_INT);
         $query->bindParam(":sexo", $datos["sexo"], PDO::PARAM_STR);
         $query->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
         $query->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);

         return $query->execute();
     }

     public static function obtenerDatos($id){
        require_once '../../conexion/conexion.php';
        $sql="SELECT id, usuario, password, email, nombre, apellidos, DNI, telefono, sexo, cargo, estado FROM usuarioss WHERE id=:id";
        $query=$conn->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
     }
     public static function actualizarDatos($datos){
        require_once '../../conexion/conexion.php';
         $sql = "UPDATE usuarioss set usuario= :usuario, 
                                  password = :password, 
                                  email = :email, 
                                  nombre = :nombre, 
                                  apellidos = :apellidos, 
                                  DNI = :DNI,
                                  telefono = :telefono,
                                  sexo = :sexo,
                                  cargo = :cargo,
                                  estado = :estado
                              WHERE id= :id";
         $query=$conn->prepare($sql);
         $query->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
         $query->bindParam(":password", $datos["password"], PDO::PARAM_STR);
         $query->bindParam(":email", $datos["email"], PDO::PARAM_STR);
         $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
         $query->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
         $query->bindParam(":DNI", $datos["DNI"], PDO::PARAM_INT);
         $query->bindParam(":telefono", $datos["telefono"], PDO::PARAM_INT);
         $query->bindParam(":sexo", $datos["sexo"], PDO::PARAM_STR);
         $query->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
         $query->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
         $query->bindParam(":id", $datos["id"], PDO::PARAM_INT);

         return $query->execute();
     }
     public static function eliminarDatos($id){
        require_once '../../conexion/conexion.php';
         $sql = "DELETE from usuarioss where id=:id";
         $query=$conn->prepare($sql);
         $query->bindParam(":id", $id, PDO::PARAM_INT);
         return $query->execute();
     }
}