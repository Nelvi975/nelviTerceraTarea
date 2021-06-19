<?php


class Conexion
{
    public function conectar(){
        $conexion= new PDO("mysql:host=localhost:3306;dbname=usuarios", "root", "");
        return $conexion;
    }
}


