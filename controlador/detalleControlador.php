<?php
class productoControlador{
    public function MostrarDatos(){
        require_once '../../config/Conexion.php';
         $query=$conn->prepare("SELECT id, nombre, apellido, email, password FROM administrador");
         $query->execute();
         return $query->fetchAll();
     }
     public function insertarDatos($datos){
        require_once '../../config/Conexion.php';
         $sql="INSERT into administrador (nombre, apellido, email, password)
                       values (:nombre,:apellido,:email,:password)";
         $query=$conn->prepare($sql);
         $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
         $query->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
         $query->bindParam(":email", $datos["email"], PDO::PARAM_STR);
         $query->bindParam(":password", $datos["password"], PDO::PARAM_STR);
         return $query->execute();
         $query->close();
     }

     public function obtenerDatos($id){
        require_once '../../config/Conexion.php';
        $sql="SELECT id, nombre, apellido, email, password FROM administrador WHERE id=:id";
        $query=$conn->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
        $query->close();
     }
     public function actualizarDatos($datos){
         require_once '../../config/Conexion.php';
         $sql = "UPDATE administrador set nombre= :nombre, 
                                  apellido = :apellido, 
                                  email = :email, 
                                  password = :password
                              WHERE id=:id";
         $query=$conn->prepare($sql);
         $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
         $query->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
         $query->bindParam(":email", $datos["email"], PDO::PARAM_STR);
         $query->bindParam(":password", $datos["password"], PDO::PARAM_STR);
         $query->bindParam(":id", $datos["id"], PDO::PARAM_INT);

         return $query->execute();
         $query->close();
     }
     public function eliminarDatos($id){
        require_once '../../config/Conexion.php';
         $sql = "DELETE from administrador where id=:id";
         $query=$conn->prepare($sql);
         $query->bindParam(":id", $id, PDO::PARAM_INT);
         return $query->execute();
         $query->close();
     }
}