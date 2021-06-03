<?php
class productoControlador{
    public function MostrarDatos(){
        require_once '../../conexion/db.php';
         $query=$conn->prepare("SELECT id_pro , tipo_pro, marca_pro, precio_pro, detalle_pro FROM producto");
         $query->execute();
         return $query->fetchAll();
     }
     public function insertarDatos($datos){
        require_once '../../conexion/db.php';
         $sql="INSERT into producto (tipo_pro, marca_pro, precio_pro, detalle_pro)
                       values (:tipo_pro,:marca_pro,:precio_pro,:detalle_pro)";
         $query=$conn->prepare($sql);
         $query->bindParam(":tipo_pro", $datos["tipo_pro"], PDO::PARAM_STR);
         $query->bindParam(":marca_pro", $datos["marca_pro"], PDO::PARAM_STR);
         $query->bindParam(":precio_pro", $datos["precio_pro"], PDO::PARAM_STR);
         $query->bindParam(":detalle_pro", $datos["detalle_pro"], PDO::PARAM_STR);
         return $query->execute();
         $query->close();
     }

     public function obtenerDatos($id){
        require_once '../../conexion/db.php';
        $sql="SELECT id_pro, tipo_pro, marca_pro, precio_pro, detalle_pro FROM producto WHERE id_pro=:id";
        $query=$conn->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
        $query->close();
     }
     public function actualizarDatos($datos){
         require_once '../../conexion/db.php';
         $sql = "UPDATE producto set tipo_pro= :tipo_pro, 
                                  marca_pro = :marca_pro, 
                                  precio_pro = :detalle_pro, 
                                  detalle_pro = :detalle_pro
                              WHERE id_pro=:id_pro";
         $query=$conn->prepare($sql);
         $query->bindParam(":tipo_pro", $datos["tipo_pro"], PDO::PARAM_STR);
         $query->bindParam(":marca_pro", $datos["marca_pro"], PDO::PARAM_STR);
         $query->bindParam(":precio_pro", $datos["precio_pro"], PDO::PARAM_STR);
         $query->bindParam(":detalle_pro", $datos["detalle_pro"], PDO::PARAM_STR);
         $query->bindParam(":id_pro", $datos["id_pro"], PDO::PARAM_INT);

         return $query->execute();
         $query->close();
     }
     public function eliminarDatos($id_pro){
        require_once '../../conexion/db.php';
         $sql = "DELETE from producto where id_pro=:id_pro";
         $query=$conn->prepare($sql);
         $query->bindParam(":id_pro", $id_pro, PDO::PARAM_INT);
         return $query->execute();
         $query->close();
     }
}