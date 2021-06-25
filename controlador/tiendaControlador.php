<?php
 
class tiendaControlador{
    public function MostrarDatos(){
        require_once '../../conexion/conexion.php';
         $query= $conn->prepare("SELECT id_ti, nom_ti, nom_prop_ti, direc_ti, telf_ti, rubro_ti FROM tienda");
         $query->execute();
         return $query->fetchAll();
     }
     public static function insertarDatos($datos){
        require_once '../../conexion/conexion.php';
         $sql="INSERT into tienda (nom_ti, nom_prop_ti, direc_ti, telf_ti, rubro_ti)
                       values (:nom_ti, :nom_prop_ti, :direc_ti, :telf_ti, :rubro_ti)";
         $query=$conn->prepare($sql);
         $query->bindParam(":nom_ti", $datos["nom_ti"], PDO::PARAM_STR);
         $query->bindParam(":nom_prop_ti", $datos["nom_prop_ti"], PDO::PARAM_STR);
         $query->bindParam(":direc_ti", $datos["direc_ti"], PDO::PARAM_STR);
         $query->bindParam(":telf_ti", $datos["telf_ti"], PDO::PARAM_STR);
         $query->bindParam(":rubro_ti", $datos["rubro_ti"], PDO::PARAM_STR);
         return $query->execute();
     }

     public static function obtenerDatos($id_ti){
        require_once '../../conexion/conexion.php';
        $sql="SELECT id_ti, nom_ti, nom_prop_ti, direc_ti, telf_ti, rubro_ti FROM tienda WHERE id_ti=:id_ti";
        $query=$conn->prepare($sql);
        $query->bindParam(":id_ti", $id_ti, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
     }
     public static function actualizarDatos($datos){
        require_once '../../conexion/conexion.php';
         $sql = "UPDATE tienda set nom_ti= :nom_ti, 
                                  nom_prop_ti = :nom_prop_ti, 
                                  direc_ti = :direc_ti, 
                                  telf_ti = :telf_ti,
                                  rubro_ti = :rubro_ti
                              WHERE id_ti= :id_ti";
         $query=$conn->prepare($sql);
         $query->bindParam(":nom_ti", $datos["nom_ti"], PDO::PARAM_STR);
         $query->bindParam(":nom_prop_ti", $datos["nom_prop_ti"], PDO::PARAM_STR);
         $query->bindParam(":direc_ti", $datos["direc_ti"], PDO::PARAM_STR);
         $query->bindParam(":telf_ti", $datos["telf_ti"], PDO::PARAM_STR);
         $query->bindParam(":rubro_ti", $datos["rubro_ti"], PDO::PARAM_STR);
         $query->bindParam(":id_ti", $datos["id_ti"], PDO::PARAM_INT);

         return $query->execute();
     }
     public static function eliminarDatos($id_ti){
        require_once '../../conexion/conexion.php';
         $sql = "DELETE from tienda where id_ti=:id_ti";
         $query=$conn->prepare($sql);
         $query->bindParam(":id_ti", $id_ti, PDO::PARAM_INT);
         return $query->execute();
     }
}