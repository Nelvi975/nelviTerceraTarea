<?php
 require_once '../../conexion/conexion.php';
class clienteControlador extends Conexion{
    public function MostrarDatos(){
         $query= Conexion::conectar()->prepare("SELECT id_cli, nom_user, ape_user, telf_user, dni_user, sex_user, direc_user FROM clientes");
         $query->execute();
         return $query->fetchAll();
         $query->close();
     }
     public function insertarDatos($datos){
         $sql="INSERT into clientes (nom_user, ape_user, telf_user, dni_user, sex_user, direc_user)
                       values (:nom_user,:ape_user,:telf_user,:dni_user,:sex_user,:direc_user)";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindParam(":nom_user", $datos["nom_user"], PDO::PARAM_STR);
         $query->bindParam(":ape_user", $datos["ape_user"], PDO::PARAM_STR);
         $query->bindParam(":telf_user", $datos["telf_user"], PDO::PARAM_STR);
         $query->bindParam(":dni_user", $datos["dni_user"], PDO::PARAM_STR);
         $query->bindParam(":sex_user", $datos["sex_user"], PDO::PARAM_STR);
         $query->bindParam(":direc_user", $datos["direc_user"], PDO::PARAM_STR);
         $query->close();
         return $query->execute();
         
     }

     public function obtenerDatos($id_cli){
        $sql="SELECT id_cli, nom_user, ape_user, telf_user, dni_user, sex_user, direc_user FROM clientes WHERE id_cli=:id_cli ";
        $query=Conexion::conectar()->prepare($sql);
        $query->bindParam(":id_cli", $id_cli, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
        $query->close();
     }
     public function actualizarDatos($datos){
         $sql = "UPDATE clientes set nom_user= :nom_user, 
                                  ape_user = :ape_user, 
                                  telf_user = :telf_user, 
                                  dni_user = :dni_user
                                  sex_user = :sex_user
                                  direc_user = :direc_user
                              WHERE id_cli=:id_cli";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindParam(":nom_user", $datos["nom_user"], PDO::PARAM_STR);
         $query->bindParam(":ape_user", $datos["ape_user"], PDO::PARAM_STR);
         $query->bindParam(":telf_user", $datos["telf_user"], PDO::PARAM_STR);
         $query->bindParam(":dni_user", $datos["dni_user"], PDO::PARAM_STR);
         $query->bindParam(":sex_user", $datos["sex_user"], PDO::PARAM_STR);
         $query->bindParam(":direc_user", $datos["direc_user"], PDO::PARAM_STR);
         $query->bindParam(":id_cli", $datos["id_cli"], PDO::PARAM_INT);

         return $query->execute();
         $query->close();
     }
     public function eliminarDatos($id_cli){
         $sql = "DELETE from clientes where id_cli=:id_cli";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindParam(":id_cli", $id_cli, PDO::PARAM_INT);
         return $query->execute();
         $query->close();
     }
}